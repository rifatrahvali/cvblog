<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Models\Dashboard\CV\EducationCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationCardController extends Controller
{
    //
    /**
     * Education Cards listesini gösterir.
     */
    public function index()
    {
        $educationCards = EducationCard::all(); // Tüm kartları getir
        return view('admin.pages.dashboard.cv.education.index', compact('educationCards'));
    }

    /**
     * Yeni bir Education Card formu gösterir.
     */
    public function create()
    {
        return view('admin.pages.dashboard.cv.education.create-edit');
    }

    /**
     * Yeni bir Education Card oluşturur.
     */
    public function store(Request $request)
    {
        $request->validate([
            'section' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'school_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'start_year' => 'required|date',
            'end_year' => 'nullable|date',
        ]);

        EducationCard::create($request->all()); // Yeni kart oluştur
        return redirect()->route('dashboard.cv.education.index')->with('success', 'Eğitim Kartı başarıyla eklendi.');
    }

    /**
     * Bir Education Card düzenleme formu gösterir.
     */
    public function edit($id)
    {
        $educationCard = EducationCard::findOrFail($id); // Kartı getir
        return view('admin.pages.dashboard.cv.education.create-edit', compact('educationCard'));
    }

    /**
     * Bir Education Card günceller.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'section' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'school_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'start_year' => 'required|date',
            'end_year' => 'nullable|date',
        ]);

        $educationCard = EducationCard::findOrFail($id); // Kartı getir
        $educationCard->update($request->all()); // Güncelle
        return redirect()->route('dashboard.cv.education.index')->with('success', 'Eğitim Kartı başarıyla güncellendi.');
    }

    /**
     * Bir Education Card siler.
     */
    public function destroy($id)
    {
        $educationCard = EducationCard::findOrFail($id); // Kartı getir
        $educationCard->delete(); // Sil
        return redirect()->route('dashboard.cv.education.index')->with('success', 'Eğitim Kartı başarıyla silindi.');
    }
}
