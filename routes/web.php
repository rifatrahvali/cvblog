<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\BlogPageController;
use App\Http\Controllers\Frontend\CVPageController;
use App\Http\Controllers\Frontend\GalleryPageController;
use App\Http\Controllers\Frontend\ReferencePageController;
use App\Http\Controllers\Frontend\SupportPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CV\ProfileCardController;
use App\Http\Controllers\Dashboard\CV\AboutCardController;
use App\Http\Controllers\Dashboard\CV\CertificateCardController;
use App\Http\Controllers\Dashboard\CV\CourseCardController;
use App\Http\Controllers\Dashboard\CV\ExperienceCardController;
use App\Http\Controllers\Dashboard\CV\EducationCardController;
use App\Http\Controllers\Dashboard\CV\LearnedFromExperienceCardController;
use App\Http\Controllers\Dashboard\CV\LearnedFromEducationCardController;



// Dashboard Rotaları
Route::prefix('dashboard')->group(function () {
    Route::get("/login", [LoginController::class, 'index'])->name("admin.dashboard.login");
    Route::get("/register", [RegisterController::class, 'index'])->name("admin.dashboard.register");

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

// Ziyaretçi
Route::get("/", [CVPageController::class,'index'])->name("cv.index");
Route::get("/blog", [BlogPageController::class,'index'])->name("blog.index");
Route::get("/gallery", [GalleryPageController::class,'index'])->name("gallery.index");
Route::get("/support", [SupportPageController::class,'index'])->name("support.index");
Route::get("/reference", [ReferencePageController::class,'index'])->name("reference.index");

