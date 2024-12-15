<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Http\Requests\Dashboard\CV\Profile\StoreProfileCardRequest;
use App\Http\Requests\Dashboard\CV\Profile\UpdateProfileCardRequest;
use App\Models\Dashboard\CV\ProfileCard;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tüm profil kartlarını listele
        $profileCards = ProfileCard::all();

        return view('admin.pages.dashboard.cv.profile.index', compact('profileCards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Yeni profil kartı oluşturma formu
        return view('admin.pages.dashboard.cv.profile.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Form doğrulama
        $validatedData = $this->validateForm($request);

        // Profil görselini yükleme
        if ($request->hasFile('profile_image')) {
            $validatedData['profil_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Yeni profil kartını oluştur
        ProfileCard::create($validatedData);

        return redirect()->route('dashboard.cv.profile')->with('success', 'Profil Kartı başarıyla oluşturuldu.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Belirli bir profil kartını düzenleme formu
        $profileCard = ProfileCard::findOrFail($id);

        return view('admin.pages.dashboard.cv.profile.create-edit', compact('profileCard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Form doğrulama
        $validatedData = $this->validateForm($request);

        // Profil kartını bul
        $profileCard = ProfileCard::findOrFail($id);

        // Profil görselini güncelleme
        if ($request->hasFile('profile_image')) {
            // Eski görseli sil
            if ($profileCard->profil_image && Storage::exists('public/' . $profileCard->profil_image)) {
                Storage::delete('public/' . $profileCard->profil_image);
            }

            $validatedData['profil_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Profil kartını güncelle
        $profileCard->update($validatedData);

        return redirect()->route('dashboard.cv.profile')->with('success', 'Profil Kartı başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Profil kartını bul
        $profileCard = ProfileCard::findOrFail($id);

        // Profil görselini sil
        if ($profileCard->profil_image && Storage::exists('public/' . $profileCard->profil_image)) {
            Storage::delete('public/' . $profileCard->profil_image);
        }

        // Profil kartını sil
        $profileCard->delete();

        return redirect()->route('dashboard.cv.profile')->with('success', 'Profil Kartı başarıyla silindi.');
    }

    /**
     * Validate form data.
     */
    private function validateForm(Request $request)
    {
        return $request->validate([
            'fullname' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'username' => 'nullable|string|max:255',
            'github_link' => 'nullable|url|max:255',
            'linkedin_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'youtube_link' => 'nullable|url|max:255',
            'x_link' => 'nullable|url|max:255',
            'profile_image' => 'nullable|image|max:2048', // Maksimum boyut: 2MB
        ]);
    }
}
