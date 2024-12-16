<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Blog\BlogArticle;
use App\Models\Dashboard\Blog\BlogCategory;

class BlogArticleController extends Controller
{
    public function index()
    {
        $articles = BlogArticle::with('category')->get(); // Makaleleri kategori ile al
        return view('admin.pages.dashboard.blog.article.index', compact('articles'));
    }

    public function create()
    {
        $categories = BlogCategory::all(); // Tüm kategorileri al
        return view('admin.pages.dashboard.blog.article.create-edit', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:blog.blog_categories,id',
            'tags' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'is_visible' => 'nullable|boolean',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('articles', 'public') : null;

        BlogArticle::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'tags' => json_encode(explode(',', $request->tags)),
            'content' => $request->content,
            'image' => $imagePath,
            'is_visible' => $request->has('is_visible'),
        ]);

        return redirect()->route('blog.articles.index')->with('success', 'Makale başarıyla oluşturuldu.');
    }

    public function edit($id)
    {
        $article = BlogArticle::findOrFail($id);
        $categories = BlogCategory::all();
        $article->tags = implode(', ', json_decode($article->tags));
        return view('admin.pages.dashboard.blog.article.create-edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $article = BlogArticle::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:blog.blog_categories,id',
            'tags' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'is_visible' => 'nullable|boolean',
        ]);

        if ($request->file('image')) {
            $article->image = $request->file('image')->store('articles', 'public');
        }

        $article->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'tags' => json_encode(explode(',', $request->tags)),
            'content' => $request->content,
            'image' => $article->image,
            'is_visible' => $request->has('is_visible'),
        ]);

        return redirect()->route('blog.articles.index')->with('success', 'Makale başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        BlogArticle::findOrFail($id)->delete();
        return redirect()->route('blog.articles.index')->with('success', 'Makale başarıyla silindi.');
    }
}
