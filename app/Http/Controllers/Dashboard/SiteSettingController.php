<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    //
    public function edit()
    {
        $settings = SiteSetting::first();
        return view('admin.pages.dashboard.dashboard.frontend-site-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'header_title' => 'required|string|max:255',
            'header_subtitle' => 'required|string|max:255',
            'footer_text' => 'required|string|max:255',
            'footer_year' => 'required|string|max:4',
        ]);

        $settings = SiteSetting::first();
        if ($settings) {
            $settings->update($validated);
        } else {
            SiteSetting::create($validated);
        }

        return redirect()->back()->with('success', 'Site ayarları başarıyla güncellendi.');
    }
}
