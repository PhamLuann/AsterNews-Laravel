<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use Carbon\Carbon;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
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
        $this->console->total_crawled++;
        $html = (string)$response->getBody();

        $crawler = new Crawler($html);
        $title = $this->getData($crawler, '//h1[@class="title-detail"]');
        $description = $this->getData($crawler, '//div[@class="sidebar-1"]/p[@class="description"]');
        $data = [
            'title' => $title->text(),
            'slug' => Str::slug($title->text()),
            'description'=>$description->text(),
            'body' => $this->getBody($crawler),
            'hero' => $this->getHero($crawler),
            'category_id' => $this->getCategory($crawler),
            'author_id' => $this->getAuthorId($crawler),
            'created_at' => $this->getTime($crawler)
        ];
        Post::create($data);
        dd($this->console->total_crawled);
    }

    public function crawlFailed(
        UriInterface $url,
        RequestException $requestException,
        ?UriInterface $foundOnUrl = null
    ): void {
        $this->console->error('Crawl error!');
    }

    public function getData(Crawler $crawler, String $fillter)
    {
        $result = $crawler->filterXPath($fillter);
        return $result;
    }

    public function getCategory(Crawler $crawler){
        $category = $this->getData($crawler, '//ul[@class="breadcrumb"]/li/a')->first();
        $categoryRepository = new CategoryRepository();
        $category_slug = Str::slug($category->text());
        $category_id = $categoryRepository->getIdBySlug($category_slug);
        if($category_id == null){
            $cat = new Category([
                'name' => $category->text(),
                'slug' => $category_slug
            ]);
            $category_id = $categoryRepository->create($cat);
        }
        return $category_id;
    }

    public function getAuthorId(Crawler $crawler){
        $author_name = $this->getData($crawler, '//p[@class="author_mail"]/strong')->text();
        $author_id = User::select('id')->where('name', $author_name)->first();
        if ($author_id == null){
            $email = Str::slug($author_name)."@gmail.com";
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

    public function getTime(Crawler $crawler){
        $time = $this->getData($crawler, '//span[@class="date"]')->text();
        $time = trim(substr($time, 10, -7));
        $created_time = Carbon::createFromFormat('m/d/Y, H:i', $time)->format('Y-m-d H:i:s');
        return $created_time;
    }

    public function getBody(Crawler $crawler){
        $contents = $this->getData($crawler, '//p[@class="Normal"]');
        $body = "";
        foreach ($contents as $content){
            $body = $body."<p>".$content->textContent."</p>";
        }
        return $body;
    }

    public function getHero(Crawler $crawler){
        $heroUrl = $this->getData($crawler, '//img[@class="lazy"]')->attr('data-src');
        return $heroUrl;
    }
}
