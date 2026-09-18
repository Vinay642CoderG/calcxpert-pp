<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function about(): string
    {
        return view('pages/about');
    }

    public function contact(): string
    {
        return view('pages/contact');
    }

    public function privacyPolicy(): string
    {
        return view('pages/privacy-policy');
    }

    public function terms(): string
    {
        return view('pages/terms');
    }

    public function disclaimer(): string
    {
        return view('pages/disclaimer');
    }

    public function calculators(): string
    {
        return view('pages/calculators');
    }

    public function healthCalculators(): string
    {
        return view('pages/calculators/health/index');
    }

    public function bmiCalculator(): string
    {
        return view('pages/calculators/health/bmi');
    }

    public function sitemapPage(): string
    {
        return view('pages/sitemap');
    }

    public function sitemapXml()
    {
        $baseUrl = rtrim(base_url(), '/');
        $urls = [
            '/',
            '/about',
            '/contact',
            '/calculators',
            '/calculators/health',
            '/calculators/health/bmi',
            '/privacy-policy',
            '/terms',
            '/disclaimer',
            '/sitemap',
        ];

        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $path) {
            $xml .= '    <url><loc>' . esc($baseUrl . $path, 'html') . '</loc></url>' . "\n";
        }

        $xml .= '</urlset>' . "\n";

        return $this->response
            ->setContentType('application/xml; charset=utf-8')
            ->setBody($xml);
    }

    public function robotsTxt()
    {
        $baseUrl = rtrim(base_url(), '/');
        $content = "User-agent: *\nAllow: /\n\nSitemap: {$baseUrl}/sitemap.xml\n";

        return $this->response
            ->setContentType('text/plain; charset=utf-8')
            ->setBody($content);
    }

}