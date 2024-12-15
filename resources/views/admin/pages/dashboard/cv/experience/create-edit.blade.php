@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($experience) ? 'Çalışma Deneyimini Düzenle' : 'Yeni Çalışma Deneyimi Ekle')

@section('dashboard-content-title', isset($experience) ? 'Çalışma Deneyimini Düzenle' : 'Yeni Çalışma Deneyimi Ekle')
@section('dashboard-content-direct-back'){{ route('dashboard.cv.experiences') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection
@section('dashboard-content')

<div class="container">
    <form class="row g-3" method="POST"
        action="{{ isset($experience) ? route('dashboard.cv.experiences.update', $experience->id) : route('dashboard.cv.experiences.store') }}">
        @csrf
        @if(isset($experience))
            @method('PUT')
        @endif

        <!-- Şirket Adı -->
        <div class="col-md-4">
            <label for="company_name" class="form-label"><strong>Şirket Adı:</strong></label>
            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name"
                name="company_name" value="{{ old('company_name', $experience->company_name ?? '') }}" required>
            @error('company_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Başlangıç Tarihi -->
        <div class="col-md-4">
            <label for="start_date" class="form-label"><strong>Başlangıç Tarihi *:</strong></label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date"
                name="start_date" value="{{ old('start_date', $experience->start_date ?? '') }}" required>
            @error('start_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Bitiş Tarihi -->
        <div class="col-md-4">
            <label for="end_date" class="form-label"><strong>Bitiş Tarihi:</strong></label>
            <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date"
                name="end_date" value="{{ old('end_date', $experience->end_date ?? '') }}">
            @error('end_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Departman -->
        <div class="col-md-6">
            <label for="department" class="form-label"><strong>Departman:</strong></label>
            <input type="text" class="form-control @error('department') is-invalid @enderror" id="department"
                name="department" value="{{ old('department', $experience->department ?? '') }}" required>
            @error('department')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ünvan -->
        <div class="col-md-6">
            <label for="title" class="form-label"><strong>Ünvan:</strong></label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $experience->title ?? '') }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Gönder Butonu -->
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="submit">{{ isset($experience) ? 'Güncelle' : 'Ekle' }}</button>
        </div>
    </form>
</div>

@endsection