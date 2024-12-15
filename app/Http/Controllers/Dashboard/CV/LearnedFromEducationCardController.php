<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\CV\EducationCard;
use App\Models\Dashboard\CV\LearnedFromEducationCard;
use Illuminate\Http\Request;

class LearnedFromEducationCardController extends Controller
{
    //
    /**
     * Tüm öğrenim deneyimlerini listeleme.
     */
    public function index()
    {
        // Tüm öğrenim deneyimlerini ilişkilendirilmiş eğitim kartlarıyla alır
        $learnedFromEducationCards = LearnedFromEducationCard::with('educationCard')->get();

        // Admin dashboard'da gösterilecek listeyi döndürür
        return view('admin.pages.dashboard.cv.learned-from-education.index', compact('learnedFromEducationCards'));
    }

    /**
     * Yeni öğrenim deneyimi ekleme formunu gösterme.
     */
    public function create()
    {
        // Tüm eğitim kartlarını alır (dropdown için)
        $educationCards = EducationCard::all();

        // Admin form sayfasını döndürür
        return view('admin.pages.dashboard.cv.learned-from-education.create-edit', compact('educationCards'));
    }

    /**
     * Yeni öğrenim deneyimini kaydetme.
     */
    public function store(Request $request)
    {
        // Gelen verilerin doğrulaması
        $request->validate([
            'education_card_id' => 'required|exists:education_cards,id', // Eğitim kartı doğrulaması
            'degree' => 'required|string|max:255', // Derece zorunlu
            'main_achievement' => 'required|string|max:255', // Ana kazanım zorunlu
            'secondary_achievements' => 'required|string|max:255', // Yan kazanımlar zorunlu
        ]);

        // Yeni öğrenim deneyimini oluştur
        LearnedFromEducationCard::create($request->all());

        // Başarılı mesajla listeye yönlendir
        return redirect()->route('dashboard.cv.learned-education.index')->with('success', 'Öğrenim deneyimi başarıyla eklendi.');
    }

    /**
     * Mevcut öğrenim deneyimini düzenleme formunu gösterme.
     */
    public function edit($id)
    {
        // Düzenlenecek öğrenim deneyimini bulur
        $learnedFromEducationCard = LearnedFromEducationCard::findOrFail($id);

        // Tüm eğitim kartlarını alır (dropdown için)
        $educationCards = EducationCard::all();

        // Form sayfasını döndürür
        return view('admin.pages.dashboard.cv.learned-from-education.create-edit', compact('learnedFromEducationCard', 'educationCards'));
    }

    /**
     * Mevcut öğrenim deneyimini güncelleme.
     */
    public function update(Request $request, $id)
    {
        // Gelen verilerin doğrulaması
        $request->validate([
            'education_card_id' => 'required|exists:education_cards,id', // Eğitim kartı doğrulaması
            'degree' => 'required|string|max:255', // Derece zorunlu
            'main_achievement' => 'required|string|max:255', // Ana kazanım zorunlu
            'secondary_achievements' => 'required|string|max:255', // Yan kazanımlar zorunlu
        ]);

        // Öğrenim deneyimini bul ve güncelle
        $learnedFromEducationCard = LearnedFromEducationCard::findOrFail($id);
        $learnedFromEducationCard->update($request->all());

        // Başarılı mesajla listeye yönlendir
        return redirect()->route('dashboard.cv.learned-education.index')->with('success', 'Öğrenim deneyimi başarıyla güncellendi.');
    }

    /**
     * Mevcut öğrenim deneyimini silme.
     */
    public function destroy($id)
    {
        // Öğrenim deneyimini bul ve sil
        $learnedFromEducationCard = LearnedFromEducationCard::findOrFail($id);
        $learnedFromEducationCard->delete();

        // Başarılı mesajla listeye yönlendir
        return redirect()->route('dashboard.cv.learned-education.index')->with('success', 'Öğrenim deneyimi başarıyla silindi.');
    }
}
