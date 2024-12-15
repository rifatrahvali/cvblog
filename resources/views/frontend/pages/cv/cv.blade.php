@extends('frontend.layouts.layout-frontend-cv')
@section('title-cv')
CV
@endsection
@section('content-cv')
<section class="col-md-4 text-center mb-4 mb-md-0">
    <!-- Profil Kartı -->
    @include('frontend.partials.cv.profile')
    <!-- Hakkımda Kartı -->
    @include('frontend.partials.cv.about')
</section>
<section class="col-md-8 mt-md-0">
    <div class="row">
        <!-- İş Deneyimi Kartı -->
        @include('frontend.partials.cv.experience')
        <!-- İş Deneyiminden Öğrenimler Kartı -->
        @include('frontend.partials.cv.learned-from-experience')
    </div>
    <div class="row">
        <!-- Eğitim Kartı -->
        @include('frontend.partials.cv.education')
        <!-- Eğitimden Öğrenim Kartı -->
        @include('frontend.partials.cv.learned-from-education')
    </div>
    <div class="row">
        <!-- Kurs Kartı -->
        @include('frontend.partials.cv.course')
        <!-- Sertifika Kartı -->
        @include('frontend.partials.cv.certificate')
    </div>
</section>
@endsection()
