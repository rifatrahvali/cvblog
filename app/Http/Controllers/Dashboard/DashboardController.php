<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view("admin.pages.dashboard.index");
    }
    public function blog(){
        return view("admin.pages.dashboard.blog.index");
    }
    public function cv(){
        return view("admin.pages.dashboard.cv.index");
    }
    public function gallery(){
        return view("admin.pages.dashboard.gallery.index");
    }
    public function reference(){
        return view("admin.pages.dashboard.reference.index");
    }
    public function support(){
        return view("admin.pages.dashboard.support.index");
    }
}
