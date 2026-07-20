<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * API candidate endpoints in priority order.
     *
     * @var array<int, string>
     */
    protected array $apiEndpoints = [
        'http://localhost/thedigicoders-com/api/blogs',
        'https://thedigicoders.com/api/blogs',
        'http://thedigicoders.com/api/blogs',
    ];

    /**
     * Display a listing of blog articles.
     */
    public function index(): View
    {
        $posts = $this->getBlogPosts();

        return view('pages.blog', compact('posts'));
    }

    /**
     * Display the specified blog article detail.
     */
    public function show(string $slug): View
    {
        $posts = $this->getBlogPosts();

        if (! isset($posts[$slug])) {
            $fallback = $this->getFallbackPosts();
            if (isset($fallback[$slug])) {
                $posts[$slug] = $fallback[$slug];
            } else {
                abort(404);
            }
        }

        $post = $posts[$slug];

        return view('pages.blog-detail', [
            'post' => $post,
            'allPosts' => $posts,
        ]);
    }

    /**
     * Fetch blog articles from candidate APIs with location filtering & local fallback.
     *
     * @return array<string, array<string, mixed>>
     */
    protected function getBlogPosts(): array
    {
        return Cache::remember('api_blogs_bestsummertraining_v2', 300, function () {
            $rawBlogs = $this->fetchFromApi();

            if (empty($rawBlogs)) {
                return $this->getFallbackPosts();
            }

            // Strictly filter blogs for location = bestsummertraining ONLY
            $sourceBlogs = array_filter($rawBlogs, function ($item) {
                $loc = strtolower(trim($item['location'] ?? ''));

                return $loc === 'bestsummertraining';
            });

            $normalized = [];
            foreach ($sourceBlogs as $item) {
                if (isset($item['status']) && $item['status'] === false) {
                    continue;
                }

                $slug = trim($item['url'] ?? $item['slug'] ?? ('blog-'.$item['id']));
                if (empty($slug)) {
                    continue;
                }

                $rawExcerpt = $item['meta_description'] ?? '';
                if (empty($rawExcerpt)) {
                    $rawExcerpt = Str::limit(strip_tags($item['content'] ?? ''), 160);
                }

                $normalized[$slug] = [
                    'id' => $item['id'] ?? '',
                    'title' => $item['title'] ?? 'Untitled Article',
                    'slug' => $slug,
                    'excerpt' => $rawExcerpt,
                    'content' => $item['content'] ?? '',
                    'author' => 'DigiCoders Team',
                    'date' => isset($item['date']) ? date('M d, Y', strtotime($item['date'])) : 'Recent',
                    'category' => 'Summer Training',
                    'read_time' => '5 min read',
                    'image' => ! empty($item['img']) ? $item['img'] : 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80',
                    'meta_description' => $item['meta_description'] ?? '',
                    'keywords' => $item['keywords'] ?? '',
                    'location' => $item['location'] ?? '',
                    'faqs' => is_string($item['faqs'] ?? null) ? json_decode($item['faqs'], true) : ($item['faqs'] ?? []),
                ];
            }

            return ! empty($normalized) ? $normalized : $this->getFallbackPosts();
        });
    }

    /**
     * Attempt fetching blog data from endpoints array.
     *
     * @return array<int, array<string, mixed>>
     */
    protected function fetchFromApi(): array
    {
        foreach ($this->apiEndpoints as $url) {
            try {
                $timeout = str_contains($url, 'localhost') ? 2 : 5;
                $response = Http::withoutVerifying()->timeout($timeout)->get($url);

                if ($response->successful()) {
                    $data = $response->json();
                    if (is_array($data)) {
                        return $data;
                    }
                }
            } catch (\Throwable $e) {
                // Fail quietly to next endpoint in list
                continue;
            }
        }

        return [];
    }

    /**
     * Fallback blog posts if API is unreachable.
     *
     * @return array<string, array<string, mixed>>
     */
    protected function getFallbackPosts(): array
    {
        return [
            '5-mistakes-choosing-summer-training' => [
                'id' => '1',
                'title' => 'Top 5 Mistakes Students Make When Choosing a Summer Training Institute',
                'slug' => '5-mistakes-choosing-summer-training',
                'excerpt' => "Don't fall for fancy marketing. Learn how to verify lab facilities, mentor quality, and project authenticity before enrolling in a summer training program.",
                'content' => '<p>Choosing a summer training institute is one of the most critical decisions a tech student makes...</p>',
                'author' => 'Aman Sharma',
                'date' => 'July 15, 2026',
                'category' => 'Summer Training',
                'read_time' => '5 min read',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80',
                'meta_description' => '',
                'keywords' => '',
                'location' => 'bestsummertraining',
                'faqs' => [],
            ],
            'practical-experience-importance' => [
                'id' => '2',
                'title' => 'Why Practical Experience is 10x More Important Than Theoretical Certificates',
                'slug' => 'practical-experience-importance',
                'excerpt' => 'Certificates look good on paper, but code on GitHub gets jobs. Discover why the software industry has shifted towards hands-on project verification.',
                'content' => '<p>The traditional IT education system is built on slide decks and exam papers...</p>',
                'author' => 'Rohan Varma',
                'date' => 'July 12, 2026',
                'category' => 'Career Guidance',
                'read_time' => '4 min read',
                'image' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=800&q=80',
                'meta_description' => '',
                'keywords' => '',
                'location' => 'bestsummertraining',
                'faqs' => [],
            ],
        ];
    }
}
