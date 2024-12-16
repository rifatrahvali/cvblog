<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Blog\BlogArticle;
use App\Models\Dashboard\Blog\BlogCategory;
use Illuminate\Http\Request;

use App\Models\Dashboard\SiteSetting;

class BlogPageController extends Controller
{
    // Blogları listeleme ve kategori filtreleme
    public function index(Request $request)
    {
        $siteSettings = SiteSetting::first();
        $query = BlogArticle::query()
            ->where('is_visible', true);

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $articles = $query->paginate(4); // Sayfa başına 4 blog

        $categories = BlogCategory::all();

        return view('frontend.pages.blog.blog', compact('articles', 'categories', 'siteSettings'));
    }

    // Blog detay sayfası
    public function show($slug)
    {
        $siteSettings = SiteSetting::first();
        // Makale detayını getir
        $article = BlogArticle::where('slug', $slug)
            ->where('is_visible', true)
            ->firstOrFail();

        // Kategorileri al
        $categories = BlogCategory::withCount('articles')->get();

        return view('frontend.pages.blog.detail', compact('article', 'categories', 'siteSettings'));
    }
    public function search(Request $request)
    {
        $query = $request->input('search'); // Arama kutusundan gelen değer

        // Makaleleri filtrele ve sayfalama uygula
        $articles = BlogArticle::where('name', 'LIKE', '%' . $query . '%')
            ->where('is_visible', true)
            ->orderBy('created_at', 'desc')
            ->paginate(4);
    
        // Tüm kategorileri listele
        $categories = BlogCategory::all();

        return view('frontend.pages.blog.search', compact('articles', 'categories', 'query'));
    }
}
