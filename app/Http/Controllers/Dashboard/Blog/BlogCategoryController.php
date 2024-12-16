<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Blog\BlogCategory;
use Illuminate\Http\Request;


class BlogCategoryController extends Controller
{
    public function index()
    {
        // Tüm kategorileri getirir
        $categories = BlogCategory::all();
        // Index sayfasını render eder
        return view('admin.pages.dashboard.blog.category.index', compact('categories'));
    }

    public function create()
    {
        // Tüm kategorileri üt kategori için getirir
        $categories = BlogCategory::all();
        // Kategori oluşturma sayfasını render eder
        return view('admin.pages.dashboard.blog.category.create-edit', compact('categories'));
    }

    public function store(Request $request)
    {
        // Formdan gelen verileri doğrula
        $request->validate([
            'name' => 'required|string|max:255', // Kategori adı zorunlu
            'description' => 'nullable|string', // Açıklama isteğe bağlı
            'tags' => 'nullable|string', // Etiketler isteğe bağlı
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Görsel isteğe bağlı ve belirli formatta olmalı
        ]);

        // Etiketleri virgülle ayrıp düzenli array formatına dönüştür
        $tags = $request->tags ? array_map('trim', explode(',', $request->tags)) : [];

        // Görseli yükle
        $imagePath = $request->file('image') 
            ? $request->file('image')->store('categories', 'public') 
            : null;

        // Yeni kategori oluştur
        BlogCategory::create([
            'name' => $request->name,
            'slug' => BlogCategory::generateUniqueSlug($request->name), // Benzersiz slug oluştur
            'description' => $request->description,
            'tags' => json_encode($tags, JSON_UNESCAPED_UNICODE), // Etiketleri JSON formatına UTF-8 şeklinde kaydet
            'image' => $imagePath, // Görsel yolu
            'parent_id' => $request->parent_id, // Üt kategori ID
            'is_visible' => $request->has('is_visible'), // Görünürlük durumu
        ]);

        return redirect()->route('blog.categories.index')->with('success', 'Kategori başarıyla oluşturuldu.');
    }

    public function edit($id)
    {
        // Belirtilen ID'li kategoriyi bul
        $category = BlogCategory::findOrFail($id);
        $categories = BlogCategory::all(); // Tüm kategoriler
        
        // Etiketlerin JSON formatını kontrol et ve array'e dönüştür
        $tags = json_decode($category->tags, true);
        $category->tags = is_array($tags) ? implode(', ', $tags) : ''; 

        return view('admin.pages.dashboard.blog.category.create-edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        // Formdan gelen verileri doğrula
        $request->validate([
            'name' => 'required|string|max:255', // Kategori adı zorunlu
            'description' => 'nullable|string', // Açıklama isteğe bağlı
            'tags' => 'nullable|string', // Etiketler isteğe bağlı
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Görsel isteğe bağlı
        ]);

        // Etiketleri virgülle ayrıp JSON formatına UTF-8 dönüştür
        $tags = $request->tags ? json_encode(array_map('trim', explode(',', $request->tags)), JSON_UNESCAPED_UNICODE) : json_encode([]);

        // Görseli kontrol et ve yükle
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $category->image = $imagePath;
        }

        // Kategori güncelle
        $category->update([
            'name' => $request->name,
            'slug' => BlogCategory::generateUniqueSlug($request->name, $id), // Slug kontrolü ve benzersiz oluşturma
            'description' => $request->description,
            'tags' => $tags, // Etiketleri JSON olarak kaydet
            'parent_id' => $request->parent_id, // Üt kategori ID
            'is_visible' => $request->has('is_visible'), // Görünürlük durumu
        ]);

        return redirect()->route('blog.categories.index')->with('success', 'Kategori başarıyla güncellendi.');
    }
    public function destroy($id)
    {
        // Belirtilen ID'li kategoriyi sil
        BlogCategory::findOrFail($id)->delete();
        return redirect()->route('blog.categories.index')->with('success', 'Kategori başarıyla silindi.');
    }
}
