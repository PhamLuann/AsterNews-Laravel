<?php

namespace App\Console\Commands;

use App\Observers\CrawlDataObserver;
use App\Observers\CrawlProfileVnExpress;
use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;
use Spatie\Crawler\CrawlProfiles\CrawlInternalUrls;

class CrawlDataCommand extends Command
{
    public $total_crawled = 0;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:start {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl data from a website';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = $this->argument('url');
        $this->info("starting crawl...");
        Crawler::create()
            ->setCrawlObserver(new CrawlDataObserver($this))
            ->setTotalCrawlLimit(200)
            ->setDelayBetweenRequests(100)
            ->setMaximumDepth(50)
            ->startCrawling($url);
    }
}
