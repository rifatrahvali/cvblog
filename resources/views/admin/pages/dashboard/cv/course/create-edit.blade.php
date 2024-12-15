<!-- Course Create/Edit Blade -->
@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($course) ? 'Kurs Kartı Düzenle' : 'Yeni Kurs Kartı Ekle')
@section('dashboard-content-title', isset($course) ? 'Kurs Kartı Düzenle' : 'Yeni Kurs Kartı Ekle')

@section('dashboard-content')
<div class="container">
    <form class="row g-3" method="POST"
        action="{{ isset($course) ? route('dashboard.cv.courses.update', $course->id) : route('dashboard.cv.courses.store') }}">
        @csrf
        @if(isset($course))
            @method('PUT')
        @endif

        <!-- Kurs Adı -->
        <div class="col-md-6">
            <label for="course_name" class="form-label"><strong>Kurs Adı *</strong></label>
            <input type="text" class="form-control @error('course_name') is-invalid @enderror" id="course_name"
                name="course_name" value="{{ old('course_name', $course->course_name ?? '') }}" required>
            @error('course_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Kurum -->
        <div class="col-md-6">
            <label for="institution" class="form-label"><strong>Kurum *</strong></label>
            <input type="text" class="form-control @error('institution') is-invalid @enderror" id="institution"
                name="institution" value="{{ old('institution', $course->institution ?? '') }}" required>
            @error('institution')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Kazanımlar -->
        <div class="col-md-12">
        <label for="additional_achievements" class="form-label"><strong>Kazanımlar *</strong></label>
            <input type="text" class="form-control @error('additional_achievements') is-invalid @enderror"
                id="additional_achievements" name="additional_achievements"
                value="{{ old('additional_achievements', isset($course) ? implode(',', json_decode($course->additional_achievements, true)) : '') }}"
                required>
            @error('additional_achievements')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid gap-2 col-md-6 mx-auto">
            <button class="btn btn-secondary" type="submit">{{ isset($course) ? 'Güncelle' : 'Kaydet' }}</button>
        </div>
    </form>
</div>
@endsection