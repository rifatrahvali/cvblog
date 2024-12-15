<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\CV\ExperienceCard; // ExperienceCard modeli dahil edildi
use App\Models\Dashboard\CV\LearnedFromExperienceCard; // LearnedFromExperienceCard modeli dahil edildi
use Illuminate\Http\Request; // HTTP istekleri için kullanılır

class LearnedFromExperienceCardController extends Controller
{
    // Listeleme işlemi
    public function index()
    {
        // Tüm learned_from_experience_cards kayıtlarını getirir ve ilgili experience (deneyim) ile ilişkilendirir
        $learnedExperiences = LearnedFromExperienceCard::with('experience')->get();

        // learned-experience.index Blade dosyasına yönlendirir ve veriyi aktarır
        return view('admin.pages.dashboard.cv.learned-from-experience.index', compact('learnedExperiences'));
    }

    // Yeni kayıt oluşturma formunu görüntülemek için
    public function create()
    {
        // Tüm experience_cards kayıtlarını getirir
        $experiences = ExperienceCard::all();

        // create-edit Blade dosyasına yönlendirir ve veriyi aktarır
        return view('admin.pages.dashboard.cv.learned-from-experience.create-edit', compact('experiences'));
    }

    // Yeni bir kayıt kaydetmek için
    public function store(Request $request)
    {
        // Form verilerini doğrular
        $request->validate([
            'experience_card_id' => 'required|exists:experience_cards,id', // Deneyim kartı mevcut olmalı
            'sentence' => 'required|string|max:255', // Kısa bir açıklama gereklidir
            'section' => 'required|string|max:255', // Bölüm bilgisi gereklidir
            'work_tags' => 'required|string|max:255', // Etiketler gereklidir
        ]);

        // Yeni kayıt oluşturur
        LearnedFromExperienceCard::create($request->all());

        // Listeleme sayfasına yönlendirir
        return redirect()->route('dashboard.cv.learned-experiences')->with('success', 'Tecrübe başarıyla eklendi.');
    }

    // Belirli bir kayıt düzenleme formunu görüntüler
    public function edit($id)
    {
        // Belirli bir kayıt getiriliyor
        $learnedExperience = LearnedFromExperienceCard::findOrFail($id);

        // Tüm deneyimler listeleniyor
        $experiences = ExperienceCard::all();

        // create-edit Blade dosyasına yönlendiriliyor
        return view('admin.pages.dashboard.cv.learned-from-experience.create-edit', compact('learnedExperience', 'experiences'));
    }

    // Belirli bir kaydı güncellemek için
    public function update(Request $request, $id)
    {
        // Form verilerini doğrular
        $request->validate([
            'experience_card_id' => 'required|exists:experience_cards,id', // Deneyim kartı mevcut olmalı
            'sentence' => 'required|string|max:255', // Kısa bir açıklama gereklidir
            'section' => 'required|string|max:255', // Bölüm bilgisi gereklidir
            'work_tags' => 'required|string|max:255', // Etiketler gereklidir
        ]);

        // Güncellenecek kayıt bulunuyor
        $learnedExperience = LearnedFromExperienceCard::findOrFail($id);

        // Kayıt güncelleniyor
        $learnedExperience->update($request->all());

        // Listeleme sayfasına yönlendiriliyor
        return redirect()->route('dashboard.cv.learned-experiences')->with('success', 'Tecrübe başarıyla güncellendi.');
    }

    // Belirli bir kaydı silmek için
    public function destroy($id)
    {
        // Silinecek kayıt bulunuyor
        $learnedExperience = LearnedFromExperienceCard::findOrFail($id);

        // Kayıt siliniyor
        $learnedExperience->delete();

        // Listeleme sayfasına yönlendiriliyor
        return redirect()->route('dashboard.cv.learned-experiences')->with('success', 'Tecrübe başarıyla silindi.');
    }
}
