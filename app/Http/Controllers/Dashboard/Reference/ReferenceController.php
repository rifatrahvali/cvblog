<?php

namespace App\Http\Controllers\Dashboard\Reference;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Reference\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    // Referansların listelendiği sayfa
    public function index()
    {
        $references = Reference::all();
        return view('admin.pages.dashboard.reference.reference.index', compact('references'));
    }

    // Yeni referans ekleme formu
    public function create()
    {
        return view('admin.pages.dashboard.reference.reference.create-edit');
    }

    // Yeni referansı kaydetme
    public function store(Request $request)
    {
        $request->validate([
            'reference_name' => 'required|string|max:255',
            'reference_image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('reference_image')->store('references', 'public');

        Reference::create([
            'reference_name' => $request->reference_name,
            'reference_comment' => $request->reference_comment,
            'reference_image' => $imagePath,
        ]);

        return redirect()->route('dashboard.reference.index')->with('success', 'Referans eklendi.');
    }

    // Referansı düzenleme formu
    public function edit(Reference $reference)
    {
        return view('admin.pages.dashboard.reference.reference.create-edit', compact('reference'));
    }

    // Düzenlenmiş referansı güncelleme
    public function update(Request $request, Reference $reference)
    {
        $request->validate([
            'reference_name' => 'required|string|max:255',
            'reference_image' => 'image|max:2048',
        ]);

        $data = $request->only(['reference_name', 'reference_comment']);

        if ($request->hasFile('reference_image')) {
            $data['reference_image'] = $request->file('reference_image')->store('references', 'public');
        }

        $reference->update($data);

        return redirect()->route('dashboard.reference.index')->with('success', 'Referans güncellendi.');
    }

    // Referansı silme
    public function destroy(Reference $reference)
    {
        $reference->delete();
        return redirect()->route('dashboard.reference.index')->with('success', 'Referans silindi.');
    }
}
