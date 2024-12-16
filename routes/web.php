<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\Blog\BlogCategoryController;
use App\Http\Controllers\Dashboard\SiteSettingController;
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

    Route::get('/site-settings/edit', [SiteSettingController::class, 'edit'])->name('site.settings.edit');
    Route::post('/site-settings/update', [SiteSettingController::class, 'update'])->name('site.settings.update');

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
    Route::get('/cv/about/create', [AboutCardController::class, 'create'])->name('dashboard.cv.about.create');
    Route::post('/cv/about', [AboutCardController::class, 'store'])->name('dashboard.cv.about.store');
    Route::get('/cv/about/{id}/edit', [AboutCardController::class, 'edit'])->name('dashboard.cv.about.edit');
    Route::put('/cv/about/{id}', [AboutCardController::class, 'update'])->name('dashboard.cv.about.update');
    Route::delete('/cv/about/{id}', [AboutCardController::class, 'destroy'])->name('dashboard.cv.about.destroy');

    Route::get('/cv/experiences', [ExperienceCardController::class, 'index'])->name('dashboard.cv.experiences');
    Route::get('/cv/experiences/create', [ExperienceCardController::class, 'create'])->name('dashboard.cv.experiences.create');
    Route::post('/cv/experiences', [ExperienceCardController::class, 'store'])->name('dashboard.cv.experiences.store');
    Route::get('/cv/experiences/{id}/edit', [ExperienceCardController::class, 'edit'])->name('dashboard.cv.experiences.edit');
    Route::put('/cv/experiences/{id}', [ExperienceCardController::class, 'update'])->name('dashboard.cv.experiences.update');
    Route::delete('/cv/experiences/{id}', [ExperienceCardController::class, 'destroy'])->name('dashboard.cv.experiences.destroy');

    Route::get('/cv/learned-experiences', [LearnedFromExperienceCardController::class, 'index'])->name('dashboard.cv.learned-experiences');
    Route::get('/cv/learned-experiences/create', [LearnedFromExperienceCardController::class, 'create'])->name('dashboard.cv.learned-experiences.create');
    Route::post('/cv/learned-experiences', [LearnedFromExperienceCardController::class, 'store'])->name('dashboard.cv.learned-experiences.store');
    Route::get('/cv/learned-experiences/{id}/edit', [LearnedFromExperienceCardController::class, 'edit'])->name('dashboard.cv.learned-experiences.edit');
    Route::put('/cv/learned-experiences/{id}', [LearnedFromExperienceCardController::class, 'update'])->name('dashboard.cv.learned-experiences.update');
    Route::delete('/cv/learned-experiences/{id}', [LearnedFromExperienceCardController::class, 'destroy'])->name('dashboard.cv.learned-experiences.destroy');

    // Eğitim Kartları Rotaları
    Route::get('/education', [EducationCardController::class, 'index'])->name('dashboard.cv.education.index');
    Route::get('/education/create', [EducationCardController::class, 'create'])->name('dashboard.cv.education.create');
    Route::post('/education', [EducationCardController::class, 'store'])->name('dashboard.cv.education.store');
    Route::get('/education/{id}/edit', [EducationCardController::class, 'edit'])->name('dashboard.cv.education.edit');
    Route::put('/education/{id}', [EducationCardController::class, 'update'])->name('dashboard.cv.education.update');
    Route::delete('/education/{id}', [EducationCardController::class, 'destroy'])->name('dashboard.cv.education.destroy');

    // Eğitimden Öğrenilenler Rotaları
    Route::get('/learned-education', [LearnedFromEducationCardController::class, 'index'])->name('dashboard.cv.learned-education.index');
    Route::get('/learned-education/create', [LearnedFromEducationCardController::class, 'create'])->name('dashboard.cv.learned-education.create');
    Route::post('/learned-education', [LearnedFromEducationCardController::class, 'store'])->name('dashboard.cv.learned-education.store');
    Route::get('/learned-education/{id}/edit', [LearnedFromEducationCardController::class, 'edit'])->name('dashboard.cv.learned-education.edit');
    Route::put('/learned-education/{id}', [LearnedFromEducationCardController::class, 'update'])->name('dashboard.cv.learned-education.update');
    Route::delete('/learned-education/{id}', [LearnedFromEducationCardController::class, 'destroy'])->name('dashboard.cv.learned-education.destroy');


    // Sertifika Kartları Rotaları
    Route::get('/cv/certificates', [CertificateCardController::class, 'index'])->name('dashboard.cv.certificates');
    Route::get('/cv/certificates/create', [CertificateCardController::class, 'create'])->name('dashboard.cv.certificates.create');
    Route::post('/cv/certificates', [CertificateCardController::class, 'store'])->name('dashboard.cv.certificates.store');
    Route::get('/cv/certificates/{id}/edit', [CertificateCardController::class, 'edit'])->name('dashboard.cv.certificates.edit');
    Route::put('/cv/certificates/{id}', [CertificateCardController::class, 'update'])->name('dashboard.cv.certificates.update');
    Route::delete('/cv/certificates/{id}', [CertificateCardController::class, 'destroy'])->name('dashboard.cv.certificates.destroy');

    // Kurs Kartları Rotaları
    Route::get('/cv/courses', [CourseCardController::class, 'index'])->name('dashboard.cv.courses');
    Route::get('/cv/courses/create', [CourseCardController::class, 'create'])->name('dashboard.cv.courses.create');
    Route::post('/cv/courses', [CourseCardController::class, 'store'])->name('dashboard.cv.courses.store');
    Route::get('/cv/courses/{id}/edit', [CourseCardController::class, 'edit'])->name('dashboard.cv.courses.edit');
    Route::put('/cv/courses/{id}', [CourseCardController::class, 'update'])->name('dashboard.cv.courses.update');
    Route::delete('/cv/courses/{id}', [CourseCardController::class, 'destroy'])->name('dashboard.cv.courses.destroy');

    // Blog
    Route::prefix('blog/categories')->group(function () {
        Route::get('/', [BlogCategoryController::class, 'index'])->name('blog.categories.index');
        Route::get('/create', [BlogCategoryController::class, 'create'])->name('blog.categories.create');
        Route::post('/', [BlogCategoryController::class, 'store'])->name('blog.categories.store');
        Route::get('/{id}/edit', [BlogCategoryController::class, 'edit'])->name('blog.categories.edit');
        Route::put('/{id}', [BlogCategoryController::class, 'update'])->name('blog.categories.update');
        Route::delete('/{id}', [BlogCategoryController::class, 'destroy'])->name('blog.categories.destroy');
    });
});

// Oturum

// Ziyaretçi
Route::get("/", [CVPageController::class, 'index'])->name("cv.index");
Route::get("/blog", [BlogPageController::class, 'index'])->name("blog.index");
Route::get("/gallery", [GalleryPageController::class, 'index'])->name("gallery.index");
Route::get("/support", [SupportPageController::class, 'index'])->name("support.index");
Route::get("/reference", [ReferencePageController::class, 'index'])->name("reference.index");

