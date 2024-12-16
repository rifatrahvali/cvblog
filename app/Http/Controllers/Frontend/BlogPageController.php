<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Blog\BlogArticle;
use App\Models\Dashboard\Blog\BlogCategory;
use Illuminate\Http\Request;

use App\Models\Dashboard\SiteSetting;

class BlogPageController extends Controller
{
    public function index() {
        $siteSettings = SiteSetting::first();
        // Tüm kategorileri ve her bir kategorideki blog sayısını al
        $categories = BlogCategory::get();

        return view("frontend.pages.blog.blog",compact('siteSettings','categories'));
    }
}
