@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($profileCard) ? 'Profil Kartını Düzenle' : 'Yeni Profil Kartı Oluştur')

@section('dashboard-content-title', isset($profileCard) ? 'Profil Kartını Düzenle' : 'Yeni Profil Kartı Oluştur')

@section('dashboard-content-direct-link')@endsection

@section('dashboard-content-direct-link-name', 'Yeni Profil Kartı Ekle')

@section('dashboard-content-direct-back'){{ route('dashboard.cv.learned-experiences') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection

@section('dashboard-content')

<div class="container gy-4">
    <!-- Form -->
    <form class="row g-3"
        action="{{ isset($profileCard) ? route('dashboard.cv.profile.update', $profileCard->id) : route('dashboard.cv.profile.store') }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($profileCard))
            @method('PUT')
        @endif

        <!-- İsim Soyisim -->
        <div class="col-md-4">
            <input type="text" class="form-control @error('fullname') is-invalid @else is-valid @enderror" id="fullname"
                name="fullname" placeholder="İsim Soyisim *" value="{{ old('fullname', $profileCard->fullname ?? '') }}"
                required>
            @error('fullname')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">İyi görünüyor!</div>
            @enderror
        </div>

        <!-- Ünvan -->
        <div class="col-md-4">
            <input type="text" class="form-control @error('title') is-invalid @else is-valid @enderror" id="title"
                name="title" placeholder="Ünvan *" value="{{ old('title', $profileCard->title ?? '') }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">İyi görünüyor!</div>
            @enderror
        </div>

        <!-- E-posta -->
        <div class="col-md-4">
            <input type="email" class="form-control @error('email') is-invalid @else is-valid @enderror" id="email"
                name="email" placeholder="Mail adresi *" value="{{ old('email', $profileCard->email ?? '') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">İyi görünüyor!</div>
            @enderror
        </div>

        <!-- Kullanıcı Adı -->
        <div class="col-md-4">
            <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı adı"
                value="{{ old('username', $profileCard->username ?? '') }}">
        </div>

        <!-- Sosyal Medya Linkleri -->
        <div class="col-md-4">
        <input type="url" class="form-control" id="github_link" name="github_link"
        placeholder="https://github.com/username"
        value="{{ old('github_link', $profileCard->github_link ?? '') }}">
        </div>

        <div class="col-md-4">
            <input type="url" class="form-control" id="linkedin_link" name="linkedin_link"
                placeholder="https://linkedin.com/in/username"
                value="{{ old('linkedin_link', $profileCard->linkedin_link ?? '') }}">
        </div>

        <div class="col-md-4">
            <input type="url" class="form-control" id="instagram_link" name="instagram_link"
                placeholder="https://instagram.com/username"
                value="{{ old('instagram_link', $profileCard->instagram_link ?? '') }}">
        </div>

        <div class="col-md-4">
            <input type="url" class="form-control" id="youtube_link" name="youtube_link"
                placeholder="https://youtube.com/username"
                value="{{ old('youtube_link', $profileCard->youtube_link ?? '') }}">
        </div>

        <div class="col-md-4">
            <input type="url" class="form-control" id="x_link" name="x_link"
                placeholder="https://x.com/username"
                value="{{ old('x_link', $profileCard->x_link ?? '') }}">
        </div>

        <!-- Profil Resmi -->
        <div class="col-md-8">
            <label class="input-group-text mb-2" for="profile_image">Profil Görseli *</label>
            <input type="file" class="form-control" name="profile_image" id="profile_image">
        </div>

        <!-- Profil Resmi Önizleme -->
        <div class="col-md-4 text-center">
            @if(isset($profileCard) && $profileCard->profil_image)
                <img src="{{ asset('storage/' . $profileCard->profil_image) }}" class="img-thumbnail" alt="Profil Önizleme">
            @else
                <img src="{{ asset('assets/admin/images/profil.png') }}" class="img-thumbnail" alt="Profil Önizleme">
            @endif
        </div>

        <!-- Gönder Butonu -->
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="submit">{{ isset($profileCard) ? 'Güncelle' : 'Ekle' }}</button>
        </div>
    </form>
</div>

@endsection