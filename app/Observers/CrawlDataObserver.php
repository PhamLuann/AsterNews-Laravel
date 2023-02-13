<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Post\PostRepository;
use Carbon\Carbon;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Psr\Log\InvalidArgumentException;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Symfony\Component\DomCrawler\Crawler;

class CrawlDataObserver extends CrawlObserver
{
    public function __construct(Command $command)
    {
        $this->console = $command;
    }

    public function willCrawl(UriInterface $url): void
    {
        $this->console->comment("Found site: {$url}");
    }

    //
    public function crawled(UriInterface $url, ResponseInterface $response, ?UriInterface $foundOnUrl = null): void
    {
        $html = (string)$response->getBody();
        $crawler = new Crawler($html);
        $h1 = $this->getData($crawler, '//h1');
        if ($h1->count() > 0 && $h1->attr('class') === "title-detail") {
            $title = $this->getData($crawler, '//h1[@class="title-detail"]');
            $description = $this->getData($crawler, '//p[@class="description"]');
            $data = [
                'title' => $title->text(),
                'slug' => Str::slug($title->text()),
                'description' => $description->text(),
                'body' => $this->getBody($crawler),
                'hero' => $this->getHero($crawler),
                'category_id' => $this->getCategory($crawler)??1,
                'author_id' => $this->getAuthorId($crawler),
                'created_at' => $this->getTime($crawler)
            ];
            $postExists = (new PostRepository())->getBySlug($data['slug']);
            if ($postExists == null){
                Post::create($data);
                $this->console->info('crawled a post.');
            }
        }
    }

    public function crawlFailed(
        UriInterface $url,
        RequestException $requestException,
        ?UriInterface $foundOnUrl = null
    ): void {
        $this->console->error('Crawl error!');
    }

    public function finishedCrawling(): void
    {
        $this->console->info('Crawler finished!');
    }

    public function getData(Crawler $crawler, string $fillter)
    {
        $result = $crawler->filterXPath($fillter);
        return $result;
    }

    public function getCategory(Crawler $crawler)
    {
        try {
            $category = $this->getData($crawler, '//ul[@class="breadcrumb"]/li/a')->first();
            $categoryRepository = new CategoryRepository();
            $category_slug = Str::slug($category->text());
            $category_id = $categoryRepository->getBySlug($category_slug);
            if ($category_id == null) {
                $cat = new Category([
                    'name' => $category->text(),
                    'slug' => $category_slug
                ]);
                $category_id = $categoryRepository->create($cat);
                return $category_id;
            }
            return $category_id->id;
        }catch (InvalidArgumentException){
            return false;
        }

    }

    public function getAuthorId(Crawler $crawler)
    {
        $author_name = $crawler->filterXPath('//p[@class="Normal"]/strong')->last();
        $author_name->count() == 0 ?$author_name = $crawler->filterXPath('//article/p')->last():$author_name;
        $author_name->count() == 0 ?$author_name = $crawler->filterXPath('//p')->last():$author_name;
        $author_name = $author_name->text();
        $author_id = User::select('id')->where('name', $author_name)->first();
        if ($author_id == null) {
            $email = Str::slug($author_name) . "@gmail.com";
            $user = new User([
                'name' => $author_name,
                'email' => $email,
                'password' => Hash::make($email),
            ]);
            $user->save();
            return $user->id;
        }
        return $author_id->id;
    }

    public function getTime(Crawler $crawler)
    {
        $time = $this->getData($crawler, '//span[@class="date"]')->text();
        $time = trim(substr($time, -24, 16));
        $created_time = Carbon::createFromFormat('d/m/Y, H:i', $time)->format('Y-m-d H:i:s');
        return $created_time;
    }

    public function getBody(Crawler $crawler)
    {
        $contents = $this->getData($crawler, '//p[@class="Normal"]');
        $body = "";
        foreach ($contents as $content) {
            $body = $body . "<p>" . $content->textContent . "</p>";
        }
        return $body;
    }

    public function getHero(Crawler $crawler)
    {
        $img = $this->getData($crawler, '//img')->each(function ($image){
            return $image->attr('class');
        });
        if (array_search('lazy', $img) > 0) {
            $heroUrl = $this->getData($crawler, '//img[@class="lazy"]')->attr('data-src');
            return $heroUrl;
        }
        return null;
    }
}
