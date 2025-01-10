<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;
use DateTime;

class GenerateSitemap extends Command
{
    protected $signature = 'command:generate';
    protected $description = 'Generate the sitemap';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $backendUrl = env('BACKEND_URL');
        $frontendUrl = env('APP_URL');
        $pagesSitemapFile = $this->generatePagesSitemap($frontendUrl);


        $propertySitemapFiles = $this->generateSitemaps(
            $backendUrl . '/api/properties',
            'properties-sitemap',
            $frontendUrl . '/property-detail'
        );

        $professionalSitemapFiles = $this->generateSitemaps(
            $backendUrl . '/api/professionals',
            'professionals-sitemap',
            $frontendUrl . '/our-professionals/details'
        );


        $this->generateSitemapIndex(array_merge($propertySitemapFiles, $professionalSitemapFiles, [$pagesSitemapFile]));

        $this->info('Sitemap generated successfully.');
    }

    private function generatePagesSitemap(string $frontendUrl)
    {
        $sitemap = Sitemap::create();

        $pages = [
            '/our-professionals',
            '/why-rep',
            '/join-rep',
            '/search',
            '/home-evaluation',
            '/contact',
            '/about-us'
        ];

        foreach ($pages as $page) {
            $sitemap->add(
                Url::create("{$frontendUrl}{$page}")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.5)
            );
        }

        $filename = 'pages-sitemap.xml';
        $sitemap->writeToFile(public_path($filename));

        return $filename;
    }

    private function generateSitemaps(string $apiUrl, string $type, string $baseUrl)
    {
        $response = Http::get($apiUrl);
        $items = $response->json();
        $chunks = array_chunk($items, 1000);
        $sitemapFiles = [];

        foreach ($chunks as $index => $chunk) {
            $sitemap = Sitemap::create();
            foreach ($chunk as $item) {
                $lastModified = new DateTime($item['updated_at']);
                $slugOrId = !empty($item['slug_url']) ? $item['slug_url'] : $item['ListingId'];
                $sitemap->add(
                    Url::create("{$baseUrl}/{$slugOrId}")
                        ->setLastModificationDate($lastModified)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.8)
                );
            }

            $filename = "{$type}" . ($index + 1) . ".xml";
            $sitemap->writeToFile(public_path($filename));
            $sitemapFiles[] = $filename;
        }

        return $sitemapFiles;
    }

    

    private function generateSitemapIndex(array $sitemapFiles)
    {
        $sitemapIndex = SitemapIndex::create();

        foreach ($sitemapFiles as $sitemapFile) {
            $sitemapIndex->add(url($sitemapFile));
        }

        $sitemapIndex->writeToFile(public_path('sitemap.xml'));
    }
}