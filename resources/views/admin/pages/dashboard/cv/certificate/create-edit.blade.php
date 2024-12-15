@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($certificate) ? 'Sertifika Kartı Düzenle' : 'Yeni Sertifika Kartı Ekle')
@section('dashboard-content-title', isset($certificate) ? 'Sertifika Kartı Düzenle' : 'Yeni Sertifika Kartı Ekle')

@section('dashboard-content')
<div class="container">
    <form class="row g-3" method="POST" action="{{ isset($certificate) ? route('dashboard.cv.certificates.update', $certificate->id) : route('dashboard.cv.certificates.store') }}">
        @csrf
        @if(isset($certificate))
            @method('PUT')
        @endif

        <!-- Sertifika Adı -->
        <div class="col-md-12">
            <label for="certificate_name" class="form-label"><strong>Sertifika Adı *</strong></label>
            <input type="text" class="form-control @error('certificate_name') is-invalid @enderror" id="certificate_name" name="certificate_name" value="{{ old('certificate_name', $certificate->certificate_name ?? '') }}" required>
            @error('certificate_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Kurum -->
        <div class="col-md-6">
            <label for="institution" class="form-label"><strong>Kurum *</strong></label>
            <input type="text" class="form-control @error('institution') is-invalid @enderror" id="institution" name="institution" value="{{ old('institution', $certificate->institution ?? '') }}" required>
            @error('institution')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Alan -->
        <div class="col-md-6">
            <label for="field" class="form-label"><strong>Alan *</strong></label>
            <input type="text" class="form-control @error('field') is-invalid @enderror" id="field" name="field" value="{{ old('field', $certificate->field ?? '') }}" required>
            @error('field')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid gap-2 col-md-6 mx-auto">
            <button class="btn btn-secondary" type="submit">{{ isset($certificate) ? 'Güncelle' : 'Kaydet' }}</button>
        </div>
    </form>
</div>
@endsection