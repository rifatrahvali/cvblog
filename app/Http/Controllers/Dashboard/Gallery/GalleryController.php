<?php

namespace App\Http\Controllers\Dashboard\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Gallery\GalleryImage;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Galeri sayfası
    public function index()
    {
        $images = GalleryImage::all();
        return view('admin.pages.dashboard.gallery.gallery.index', compact('images'));
    }

    // Yeni görsel ekleme sayfası
    public function create()
    {
        return view('admin.pages.dashboard.gallery.gallery.create-edit');
    }

    // Yeni görsel kaydetme
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        GalleryImage::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.gallery.index')->with('success', 'Görsel başarıyla eklendi.');
    }

    public function edit($id)
    {
        $image = GalleryImage::findOrFail($id);
        return view('admin.pages.dashboard.gallery.gallery.create-edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $image = GalleryImage::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
            $image->image = $imagePath;
        }

        $image->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.gallery.index')->with('success', 'Görsel başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $image = GalleryImage::findOrFail($id);
        $image->delete();

        return redirect()->route('dashboard.gallery.index')->with('success', 'Görsel silindi.');
    }
}
