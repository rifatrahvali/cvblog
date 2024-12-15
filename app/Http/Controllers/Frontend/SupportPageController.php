<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\SiteSetting;
class SupportPageController extends Controller
{
    //
    public function index() {
        $siteSettings = SiteSetting::first();
        return view("frontend.pages.support.support",compact('siteSettings'));
    }
}
