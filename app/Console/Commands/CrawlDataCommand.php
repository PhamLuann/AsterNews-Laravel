<?php

namespace App\Console\Commands;

use App\Observers\CrawlDataObserver;
use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;

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
            ->startCrawling($url);
    }
}
