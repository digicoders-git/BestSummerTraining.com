<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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
        'https://thedigicoders.com/api/blogs?location=bestsummertraining',
        'https://thedigicoders.com/api/blogs',
    ];

    /**
     * Display the home page with latest blogs for location=bestsummertraining.
     */
    public function home(): View
    {
        $allBlogs = $this->getBlogPosts();
        $blogs = array_slice($allBlogs, 0, 3, true);

        return view('pages.home', compact('blogs'));
    }

    /**
     * Display a listing of blog articles.
     */
    public function index(): View
    {
        $posts = $this->getBlogPosts();

        return view('pages.blog', compact('posts'));
    }

    /**
     * Display the specified blog article detail and track view count.
     */
    public function show(Request $request, string $slug): View
    {
        $posts = $this->getBlogPosts();

        if (! isset($posts[$slug])) {
            abort(404);
        }

        $post = $posts[$slug];

        // Track blog view count via remote API
        if (! empty($post['id'])) {
            try {
                $response = Http::withoutVerifying()->timeout(4)->post('https://thedigicoders.com/api/blogs/track-view', [
                    'blog_id' => $post['id'],
                    'ip_address' => $request->ip(),
                ]);

                if ($response->successful()) {
                    $resData = $response->json();
                    if (isset($resData['views_count'])) {
                        $post['views_count'] = (int) $resData['views_count'];
                    }
                }
            } catch (\Throwable $e) {
                // Silently continue if view tracking fails or times out
            }
        }

        return view('pages.blog-detail', [
            'post' => $post,
            'allPosts' => $posts,
        ]);
    }

    /**
     * Fetch blog articles from candidate APIs with location filtering.
     * Strictly includes items where location == 'bestsummertraining' only.
     *
     * @return array<string, array<string, mixed>>
     */
    public function getBlogPosts(): array
    {
        return Cache::remember('api_blogs_bestsummertraining_v4', 60, function () {
            $rawBlogs = $this->fetchFromApi();

            if (empty($rawBlogs)) {
                return [];
            }

            // Strictly filter blogs for location = bestsummertraining ONLY
            $sourceBlogs = array_filter($rawBlogs, function ($item) {
                $loc = strtolower(trim($item['location'] ?? ''));
                $status = $item['status'] ?? 'true';
                $isValidStatus = ($status === 'true' || $status === true || $status === '1' || $status === 1);

                return $loc === 'bestsummertraining' && $isValidStatus;
            });

            $normalized = [];
            foreach ($sourceBlogs as $item) {
                $slug = trim($item['url'] ?? $item['slug'] ?? ('blog-'.$item['id']));
                if (empty($slug)) {
                    continue;
                }

                $rawExcerpt = $item['meta_description'] ?? '';
                if (empty($rawExcerpt)) {
                    $rawExcerpt = Str::limit(strip_tags($item['content'] ?? ''), 160);
                }

                $imgUrl = trim($item['img'] ?? '');
                // Check if imgUrl is a valid image or fallback to sleek default image
                if (empty($imgUrl) || Str::endsWith(strtolower($imgUrl), ['.docx', '.doc', '.pdf'])) {
                    $imgUrl = 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80';
                }

                $faqs = [];
                if (! empty($item['faqs'])) {
                    if (is_string($item['faqs'])) {
                        $decoded = json_decode($item['faqs'], true);
                        if (is_array($decoded)) {
                            $faqs = $decoded;
                        }
                    } elseif (is_array($item['faqs'])) {
                        $faqs = $item['faqs'];
                    }
                }

                $normalized[$slug] = [
                    'id' => $item['id'] ?? '',
                    'title' => $item['title'] ?? 'Untitled Article',
                    'meta_title' => $item['meta_title'] ?? ($item['title'] ?? ''),
                    'slug' => $slug,
                    'excerpt' => $rawExcerpt,
                    'content' => $item['content'] ?? '',
                    'author' => ! empty($item['author_name']) ? $item['author_name'] : 'DigiCoders Team',
                    'author_designation' => $item['author_designation'] ?? 'Tech Expert',
                    'date' => isset($item['date']) ? date('M d, Y', strtotime($item['date'])) : 'Recent',
                    'time' => $item['time'] ?? '',
                    'category' => 'Summer Training',
                    'read_time' => '5 min read',
                    'views_count' => (int) ($item['views_count'] ?? $item['views'] ?? $item['view_count'] ?? 0),
                    'image' => $imgUrl,
                    'img_alt' => $item['img_alt'] ?? ($item['title'] ?? ''),
                    'meta_description' => $item['meta_description'] ?? '',
                    'keywords' => $item['keywords'] ?? '',
                    'location' => $item['location'] ?? '',
                    'faqs' => $faqs,
                ];
            }

            return $normalized;
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
                $response = Http::withoutVerifying()->timeout(5)->get($url);

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
     * Returns empty array to prevent displaying dummy posts.
     *
     * @return array<string, array<string, mixed>>
     */
    protected function getFallbackPosts(): array
    {
        return [];
    }
}
