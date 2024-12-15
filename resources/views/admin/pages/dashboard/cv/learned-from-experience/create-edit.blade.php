@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($learnedExperience) ? 'Öğrenilen Tecrübeyi Düzenle' : 'Yeni Öğrenilen Tecrübe Ekle')

@section('dashboard-content-title', isset($learnedExperience) ? 'Öğrenilen Tecrübeyi Düzenle' : 'Yeni Öğrenilen Tecrübe Ekle')

@section('dashboard-content-direct-back'){{ route('dashboard.cv.learned-experiences') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection
@section('dashboard-content')

<div class="container">
    <form class="row g-3" method="POST"
        action="{{ isset($learnedExperience) ? route('dashboard.cv.learned-experiences.update', $learnedExperience->id) : route('dashboard.cv.learned-experiences.store') }}">
        @csrf
        @if(isset($learnedExperience))
            @method('PUT')
        @endif

        <!-- Şirket Adı -->
        <div class="col-md-6">
            <label for="experience_card_id" class="form-label"><strong>Şirket Adı *</strong></label>
            <select id="experience_card_id" name="experience_card_id"
                class="form-select @error('experience_card_id') is-invalid @enderror" required>
                @foreach($experiences as $experience)
                    <option value="{{ $experience->id }}" {{ isset($learnedExperience) && $learnedExperience->experience_card_id == $experience->id ? 'selected' : '' }}>
                        {{ $experience->company_name }}
                    </option>
                @endforeach
            </select>
            @error('experience_card_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- İş Açıklaması -->
        <div class="col-md-6">
            <label for="sentence" class="form-label"><strong>Açıklama</strong></label>
            <input type="text" class="form-control @error('sentence') is-invalid @enderror" id="sentence"
                name="sentence" value="{{ old('sentence', $learnedExperience->sentence ?? '') }}" required>
            @error('sentence')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Bölüm -->
        <div class="col-md-6">
            <label for="section" class="form-label"><strong>Bölüm</strong></label>
            <input type="text" class="form-control @error('section') is-invalid @enderror" id="section" name="section"
                value="{{ old('section', $learnedExperience->section ?? '') }}" required>
            @error('section')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Etiketler -->
        <div class="col-md-6">
            <label for="work_tags" class="form-label"><strong>Etiketler (virgül ile ayırınız)</strong></label>
            <input type="text" class="form-control @error('work_tags') is-invalid @enderror" id="work_tags"
                name="work_tags" value="{{ old('work_tags', $learnedExperience->work_tags ?? '') }}" required>
            @error('work_tags')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Gönder Butonu -->
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary"
                type="submit">{{ isset($learnedExperience) ? 'Güncelle' : 'Ekle' }}</button>
        </div>
    </form>
</div>

@endsection