@extends('admin.layouts.layout-admin')

@section('dashboard-title', isset($aboutCard) ? 'Hakkımda Bilgisi Düzenle' : 'Yeni Hakkımda Bilgisi Ekle')

@section('dashboard-content-title', isset($aboutCard) ? 'Hakkımda Bilgisi Düzenle' : 'Yeni Hakkımda Bilgisi Ekle')

@section('dashboard-content')
<div class="container">
    <form class="row g-3" method="POST"
        action="{{ isset($aboutCard) ? route('dashboard.cv.about.update', $aboutCard->id) : route('dashboard.cv.about.store') }}">
        @csrf
        @if(isset($aboutCard))
            @method('PUT') <!-- Güncelleme için gerekli -->
        @endif

        <div class="col-md-12">
            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                placeholder="Hakkımda Bilgisi" rows="15" id="editor"
                required>{{ old('description', $aboutCard->description ?? '') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="submit">{{ isset($aboutCard) ? 'Güncelle' : 'Ekle' }}</button>
        </div>
    </form>
</div>
@endsection