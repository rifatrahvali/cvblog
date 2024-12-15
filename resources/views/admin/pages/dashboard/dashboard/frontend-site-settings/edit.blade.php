@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Site Ayarları')
@section('dashboard-content-title', 'Site Ayarları')

@section('dashboard-content')
<div class="container">
    <form class="row g-3" method="POST" action="{{ route('site.settings.update') }}">
        @csrf

        <!-- Başlık -->
        <div class="col-md-6">
            <label for="header_title" class="form-label"><strong>Başlık *</strong></label>
            <input type="text" class="form-control" id="header_title" name="header_title" 
                   placeholder="Başlık" value="{{ old('header_title', $settings->header_title ?? '') }}" required>
        </div>

        <!-- Alt Başlık -->
        <div class="col-md-6">
            <label for="header_subtitle" class="form-label"><strong>Alt Başlık *</strong></label>
            <input type="text" class="form-control" id="header_subtitle" name="header_subtitle" 
                   placeholder="Alt Başlık" value="{{ old('header_subtitle', $settings->header_subtitle ?? '') }}" required>
        </div>

        <!-- Altbilgi Metni -->
        <div class="col-md-6">
            <label for="footer_text" class="form-label"><strong>Altbilgi Metni *</strong></label>
            <input type="text" class="form-control" id="footer_text" name="footer_text" 
                   placeholder="Altbilgi Metni" value="{{ old('footer_text', $settings->footer_text ?? '') }}" required>
        </div>

        <!-- Altbilgi Yılı -->
        <div class="col-md-6">
            <label for="footer_year" class="form-label"><strong>Altbilgi Yılı *</strong></label>
            <input type="text" class="form-control" id="footer_year" name="footer_year" 
                   placeholder="Altbilgi Yılı" value="{{ old('footer_year', $settings->footer_year ?? '') }}" required>
        </div>

        <div class="d-grid gap-2 col-md-6 mx-auto">
            <button class="btn btn-secondary" type="submit">Kaydet</button>
        </div>
    </form>
</div>
@endsection
