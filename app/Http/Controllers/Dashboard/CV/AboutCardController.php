<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Models\Dashboard\CV\AboutCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AboutCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutCards = AboutCard::all();
        return view('admin.pages.dashboard.cv.about.index', compact('aboutCards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.dashboard.cv.about.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:1000',
        ]);

        AboutCard::create([
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.cv.about')->with('success', 'Hakkımda bilgisi başarıyla eklendi.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aboutCard = AboutCard::findOrFail($id);
        return view('admin.pages.dashboard.cv.about.create-edit', compact('aboutCard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:1000',
        ]);

        $aboutCard = AboutCard::findOrFail($id);
        $aboutCard->update([
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.cv.about')->with('success', 'Hakkımda bilgisi başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aboutCard = AboutCard::findOrFail($id);
        $aboutCard->delete();

        return redirect()->route('dashboard.cv.about')->with('success', 'Hakkımda bilgisi başarıyla silindi.');
    }
}
