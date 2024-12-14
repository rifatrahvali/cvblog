<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CV\ProfileCardController;
use App\Http\Controllers\Cv\AboutCardController;
use App\Http\Controllers\Cv\CertificateCardController;
use App\Http\Controllers\Cv\CourseCardController;
use App\Http\Controllers\Cv\ExperienceCardController;
use App\Http\Controllers\Cv\EducationCardController;
use App\Http\Controllers\Cv\LearnedFromExperienceCardController;
use App\Http\Controllers\Cv\LearnedFromEducationCardController;

// Dashboard Rotaları
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Dashboard alt bölümleri
    Route::get('/cv', [DashboardController::class, 'cv'])->name('dashboard.cv');
    Route::get('/gallery', [DashboardController::class, 'gallery'])->name('dashboard.gallery');
    Route::get('/support', [DashboardController::class, 'support'])->name('dashboard.support');
    Route::get('/reference', [DashboardController::class, 'reference'])->name('dashboard.reference');
    Route::get('/blog', [DashboardController::class, 'blog'])->name('dashboard.blog');

    // CV Yönetimi Alt Bölümleri
    Route::get('/cv/profile', [ProfileCardController::class, 'index'])->name('dashboard.cv.profile');
    Route::post('/cv/profile', [ProfileCardController::class, 'store'])->name('dashboard.cv.profile.store');
    Route::get('/cv/profile/create', [ProfileCardController::class, 'create'])->name('dashboard.cv.profile.create');
    Route::get('/cv/profile/{id}/edit', [ProfileCardController::class, 'edit'])->name('dashboard.cv.profile.edit');
    Route::put('/cv/profile/{id}', [ProfileCardController::class, 'update'])->name('dashboard.cv.profile.update');
    Route::delete('/cv/profile/{id}', [ProfileCardController::class, 'destroy'])->name('dashboard.cv.profile.destroy');

    Route::get('/cv/about', [AboutCardController::class, 'index'])->name('dashboard.cv.about');
    Route::get('/cv/certificates', [CertificateCardController::class, 'index'])->name('dashboard.cv.certificates');
    Route::get('/cv/courses', [CourseCardController::class, 'index'])->name('dashboard.cv.courses');
    Route::get('/cv/experiences', [ExperienceCardController::class, 'index'])->name('dashboard.cv.experiences');
    Route::get('/cv/learned-experiences', [LearnedFromExperienceCardController::class, 'index'])->name('dashboard.cv.learned-experiences');
    Route::get('/cv/education', [EducationCardController::class, 'index'])->name('dashboard.cv.education');
    Route::get('/cv/learned-education', [LearnedFromEducationCardController::class, 'index'])->name('dashboard.cv.learned-education');
});

// Oturum
Route::get("/login", function () {
    return view("admin.pages.auth.page-login");
})->name("admin.dashboard.login");

Route::get("/register", function () {
    return view("admin.pages.auth.page-register");
})->name("admin.dashboard.register");

// Ziyaretçi
Route::get("/", function () {
    return view("frontend.layouts.layout-frontend-cv");
})->name("cv.index");

Route::get("/blog", function () {
    return view("frontend.layouts.layout-frontend-blog");
})->name("blog.index");

Route::get("/gallery", function () {
    return view("frontend.layouts.layout-frontend-gallery");
})->name("gallery.index");

Route::get("/support", function () {
    return view("frontend.layouts.layout-frontend-support");
})->name("support.index");

Route::get("/reference", function () {
    return view("frontend.layouts.layout-frontend-reference");
})->name("reference.index");

Route::get('/', function () {
    return view('welcome');
});
