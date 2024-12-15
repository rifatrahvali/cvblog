@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($learnedFromEducationCard) ? 'Eğitim Süreci Deneyimini Düzenle' : 'Yeni Eğitim Süreci Deneyimi Ekle')

@section('dashboard-content-title', isset($learnedFromEducationCard) ? 'Eğitim Süreci Deneyimini Düzenle' : 'Yeni Eğitim Süreci Deneyimi Ekle')

@section('dashboard-content-direct-back'){{ route('dashboard.cv.learned-education.index') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection

@section('dashboard-content')

<div class="container">
    <form class="row g-3" method="POST" 
        action="{{ isset($learnedFromEducationCard) ? route('dashboard.cv.learned-education.update', $learnedFromEducationCard->id) : route('dashboard.cv.learned-education.store') }}">
        @csrf
        @if(isset($learnedFromEducationCard))
            @method('PUT')
        @endif

        <!-- Okul -->
        <div class="col-md-6">
            <label for="education_card_id" class="form-label"><strong>Okul *</strong></label>
            <select id="education_card_id" name="education_card_id" class="form-select @error('education_card_id') is-invalid @enderror" required>
                @foreach($educationCards as $card)
                    <option value="{{ $card->id }}" {{ old('education_card_id', $learnedFromEducationCard->education_card_id ?? '') == $card->id ? 'selected' : '' }}>
                        {{ $card->school_name }}
                    </option>
                @endforeach
            </select>
            @error('education_card_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Derece -->
        <div class="col-md-6">
            <label for="degree" class="form-label"><strong>Derece *</strong></label>
            <input type="text" class="form-control @error('degree') is-invalid @enderror" id="degree" name="degree"
                   placeholder="Derece (Lise, Üniversite vb.)" value="{{ old('degree', $learnedFromEducationCard->degree ?? '') }}" required>
            @error('degree')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ana Kazanım -->
        <div class="col-md-6">
            <label for="main_achievement" class="form-label"><strong>Ana Kazanım</strong></label>
            <input type="text" class="form-control @error('main_achievement') is-invalid @enderror" id="main_achievement" name="main_achievement"
                   placeholder="Ana Kazanım" value="{{ old('main_achievement', $learnedFromEducationCard->main_achievement ?? '') }}" required>
            @error('main_achievement')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Yan Kazanımlar -->
        <div class="col-md-6">
            <label for="secondary_achievements" class="form-label"><strong>Yan Kazanımlar (virgül ile ayırınız)</strong></label>
            <input type="text" class="form-control @error('secondary_achievements') is-invalid @enderror" id="secondary_achievements" name="secondary_achievements"
                   placeholder="Yan Kazanımlar" value="{{ old('secondary_achievements', $learnedFromEducationCard->secondary_achievements ?? '') }}" required>
            @error('secondary_achievements')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="submit">{{ isset($learnedFromEducationCard) ? 'Güncelle' : 'Ekle' }}</button>
        </div>
    </form>
</div>

@endsection


