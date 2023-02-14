<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Post;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Post\PostRepository;
use Carbon\Carbon;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Console\Command;
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
                'category_id' => $this->getCategory($crawler),
                'created_at' => $this->getTime($crawler)
            ];
            $postExists = (new PostRepository())->getBySlug($data['slug']);
            if ($postExists == null) {
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
            $category = $this->getData($crawler, '//ul[@class="breadcrumb"]/li/a')->first();
            if($category->count() == 0){
                return 18;
            }
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
        $contents = $this->getData($crawler, '//article[@class="fck_detail "]');
        $contents->count() == 0 ? $contents = $this->getData($crawler,
            '//article[@class="fck_detail"]')->html() : $contents = $contents->html();
        $contents = preg_replace("/src=\"data\S*\"/", "", $contents);
        $contents = str_replace("data-src", "src", $contents);
        return $contents;
    }

    public function getHero(Crawler $crawler)
    {
        $img = $this->getData($crawler, '//img')->each(function ($image) {
            return $image->attr('class');
        });
        if (array_search('lazy', $img) > 0) {
            $heroUrl = $this->getData($crawler, '//img[@class="lazy"]')->attr('data-src');
            return $heroUrl;
        }
        return null;
    }
}
