<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Reference\Reference;
use Illuminate\Http\Request;
use App\Models\Dashboard\SiteSetting;
class ReferencePageController extends Controller
{
    //
    public function index() {
        $siteSettings = SiteSetting::first();
        $references=Reference::all();
        return view("frontend.pages.reference.reference",compact('siteSettings','references'));
    }
}
