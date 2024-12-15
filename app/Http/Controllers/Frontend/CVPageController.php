<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\CV\AboutCard;
use App\Models\Dashboard\CV\ProfileCard;

use Illuminate\Http\Request;

class CVPageController extends Controller
{
    public function index () {
        $profileCard = ProfileCard::first(); // Profil bilgisi, yalnızca bir kayıt olduğu için first() kullanıldı.
        $aboutCard = AboutCard::first(); // Hakkında bilgisi, yalnızca bir kayıt olduğu için first() kullanıldı.
        return view("frontend.pages.cv.cv",compact('profileCard','aboutCard'));
    }
}
