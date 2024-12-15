<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CVPageController extends Controller
{
    public function index () {
        return view("frontend.pages.cv.cv");
    }
}
