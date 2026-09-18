<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate dynamic sitemap.xml including static pages and dynamic blogs.
     */
    public function index(BlogController $blogController): Response
    {
        $now = date('c');

        $staticPages = [
            ['url' => url('/'), 'priority' => '1.0', 'changefreq' => 'daily', 'lastmod' => $now],
            ['url' => url('/summer-training-comparison'), 'priority' => '0.9', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/internship-comparison'), 'priority' => '0.9', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/industrial-training-comparison'), 'priority' => '0.9', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/apprenticeship-comparison'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/company-overview'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now],
            ['url' => url('/about'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now],
            ['url' => url('/contact'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now],
            ['url' => url('/faq'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/blog'), 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $now],
            ['url' => url('/professional-courses-comparison'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/career-programs-comparison'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/python-training-comparison'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/mern-stack-comparison'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/web-development-training'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/mobile-development-training'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/data-science-training'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/cloud-computing-training'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/digital-marketing-training'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/ui-ux-design-training'), 'priority' => '0.8', 'changefreq' => 'weekly', 'lastmod' => $now],
            ['url' => url('/privacy-policy'), 'priority' => '0.5', 'changefreq' => 'yearly', 'lastmod' => $now],
            ['url' => url('/terms-and-conditions'), 'priority' => '0.5', 'changefreq' => 'yearly', 'lastmod' => $now],
            ['url' => url('/disclaimer'), 'priority' => '0.5', 'changefreq' => 'yearly', 'lastmod' => $now],
        ];

        $urls = $staticPages;

        // Dynamic blog posts fetched from BlogController
        $posts = $blogController->getBlogPosts();
        foreach ($posts as $slug => $post) {
            $lastmod = ! empty($post['date']) ? date('c', strtotime($post['date'])) : $now;
            $urls[] = [
                'url' => url('/blog/'.$slug),
                'priority' => '0.7',
                'changefreq' => 'weekly',
                'lastmod' => $lastmod,
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($urls as $item) {
            $xml .= "  <url>\n";
            $xml .= '    <loc>'.htmlspecialchars($item['url'], ENT_XML1, 'UTF-8')."</loc>\n";
            $xml .= '    <lastmod>'.$item['lastmod']."</lastmod>\n";
            $xml .= '    <changefreq>'.$item['changefreq']."</changefreq>\n";
            $xml .= '    <priority>'.$item['priority']."</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'text/xml; charset=UTF-8',
        ]);
    }

    /**
     * Serve dynamic robots.txt file with sitemap URL.
     */
    public function robots(): Response
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "Disallow: /admin/\n";
        $content .= "Disallow: /vendor/\n";
        $content .= "Disallow: /storage/\n\n";
        $content .= 'Sitemap: '.url('/sitemap.xml')."\n";

        return response($content, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }
}
