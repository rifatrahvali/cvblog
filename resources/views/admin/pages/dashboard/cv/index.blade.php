@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Profil Kartları')

@section('dashboard-content-title', 'Profil Kartları Listesi')

@section('dashboard-content-direct-link')@endsection

@section('dashboard-content-direct-link-name')@endsection

@section('dashboard-content-direct-back')@endsection

@section('dashboard-content-direct-back-name')@endsection

@section('dashboard-content')

<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="{{ route('dashboard.cv.profile') }}">
                    <h3 class="fs-2"><i class="bi bi-person-lines-fill me-4"></i>Profil Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Profil bilgilerinin tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>
<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="{{ route('dashboard.cv.about') }}">
                    <h3 class="fs-2"><i class="bi bi-info-circle-fill me-4"></i>Hakkımda Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Hakkımda bilgilerinin tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>
<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="{{route('dashboard.cv.experiences')}}">
                    <h3 class="fs-2"><i class="bi bi-building me-4"></i>Şirket Deneyimi Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Çalışılan Şirketin bilgilerinin tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>

<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="{{route('dashboard.cv.learned-experiences')}}">
                    <h3 class="fs-2"><i class="bi bi-building-add me-4"></i>Şirket İçi
                        Çalışma Deneyimi Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Çalışılan Şirkette kazanımların tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>
<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="management-cv-about-card.html">
                    <h3 class="fs-2"><i class="bi bi-folder me-4"></i>Eğitim Bilgileri Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Eğitim bilgilerinin tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>

<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="management-cv-about-card.html">
                    <h3 class="fs-2"><i class="bi bi-folder-plus me-4"></i>Eğitim
                        Sürecindeki Deneyimler Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Eğitimdeki kazanımların tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>
<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="management-cv-about-card.html">
                    <h3 class="fs-2"><i class="bi bi-file-text me-4"></i>
                        Kurslar Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Kursların tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>
<!-- Kart -->
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="management-cv-about-card.html">
                    <h3 class="fs-2"><i class="bi bi-file-richtext me-4"></i>
                        Sertifikalar Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Sertifikaların tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>

@endsection