<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Gallery\GalleryImage;
use Illuminate\Http\Request;
use App\Models\Dashboard\SiteSetting;

class GalleryPageController extends Controller
{
    public function index() {
        $siteSettings = SiteSetting::first();
        $images = GalleryImage::all();
        return view("frontend.pages.gallery.gallery",compact('siteSettings','images'));
    }
}
