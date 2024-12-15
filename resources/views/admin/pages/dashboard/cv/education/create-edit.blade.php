@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($educationCard) ? 'Eğitim Kartı Düzenle' : 'Yeni Eğitim Kartı Ekle')

@section('dashboard-content-title', isset($educationCard) ? 'Eğitim Kartı Düzenle' : 'Yeni Eğitim Kartı Ekle')
@section('dashboard-content-direct-back'){{ route('dashboard.cv.education.index') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection
@section('dashboard-content')

<div class="container">
    <form class="row g-3" method="POST"
            action="{{ isset($educationCard) ? route('dashboard.cv.education.update', $educationCard->id) : route('dashboard.cv.education.store') }}">
            @csrf
            @if (isset($educationCard))
                @method('PUT')
            @endif

            <!-- Eğitim Seviyesi -->
            <div class="col-md-4">
                <label for="section" class="form-label"><strong>Eğitim Seviyesi *</strong></label>
                <input type="text" class="form-control @error('section') is-invalid @enderror" id="section" name="section"
                    placeholder="Eğitim Seviyesi *" value="{{ old('section', $educationCard->section ?? '') }}" required>
                @error('section')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">İyi görünüyor!</div>
                @enderror
            </div>

            <!-- Şehir -->
            <div class="col-md-4">
                <label for="city" class="form-label"><strong>Şehir *</strong></label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
                    placeholder="Şehir *" value="{{ old('city', $educationCard->city ?? '') }}" required>
                @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">İyi görünüyor!</div>
                @enderror
            </div>

            <!-- Okul -->
            <div class="col-md-4">
                <label for="school_name" class="form-label"><strong>Okul *</strong></label>
                <input type="text" class="form-control @error('school_name') is-invalid @enderror" id="school_name" name="school_name"
                    placeholder="Okul *" value="{{ old('school_name', $educationCard->school_name ?? '') }}" required>
                @error('school_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">İyi görünüyor!</div>
                @enderror
            </div>

            <!-- Bölüm -->
            <div class="col-md-4">
                <label for="department" class="form-label"><strong>Bölüm *</strong></label>
                <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department"
                    placeholder="Bölüm *" value="{{ old('department', $educationCard->department ?? '') }}" required>
                @error('department')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">İyi görünüyor!</div>
                @enderror
            </div>

            <!-- Başlangıç Tarihi -->
            <div class="col-md-4">
                <label for="start_year" class="form-label"><strong>Başlangıç Tarihi *</strong></label>
                <input type="date" class="form-control @error('start_year') is-invalid @enderror" id="start_year" name="start_year"
                    value="{{ old('start_year', $educationCard->start_year ?? '') }}" required>
                @error('start_year')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">İyi görünüyor!</div>
                @enderror
            </div>

            <!-- Bitiş Tarihi -->
            <div class="col-md-4">
                <label for="end_year" class="form-label"><strong>Bitiş Tarihi</strong></label>
                <input type="date" class="form-control @error('end_year') is-invalid @enderror" id="end_year" name="end_year"
                    value="{{ old('end_year', $educationCard->end_year ?? '') }}">
                @error('end_year')
                    <div class="invalid-feedback">{{ $message }}</div>
                @else
                    <div class="valid-feedback">İyi görünüyor!</div>
                @enderror
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-secondary" type="submit">{{ isset($educationCard) ? 'Güncelle' : 'Ekle' }}</button>
            </div>
        </form>
</div>

@endsection
