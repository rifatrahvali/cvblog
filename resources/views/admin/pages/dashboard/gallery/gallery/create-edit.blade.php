@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Oluştur')

@section('dashboard-content-title', 'Galeri Görsel Oluştur')

@section('dashboard-content-direct-link')@endsection

@section('dashboard-content-direct-link-name')@endsection

@section('dashboard-content-direct-back'){{ route('dashboard.gallery.index') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')
<form method="POST"
    action="{{ isset($image) ? route('dashboard.gallery.update', $image->id) : route('dashboard.gallery.store') }}"
    enctype="multipart/form-data">
    @csrf
    @if (isset($image))
        @method('PUT')
    @endif

    <div class="row">
        <div class="mb-3 col-md-4">
            <label for="gallery_name" class="form-label"><strong>Görsel Adı *</strong></label>
            <input type="text" name="name" id="gallery_name" class="form-control"
                value="{{ old('name', $image->name ?? '') }}" required>
        </div>

        <div class="mb-3 col-md-8">
            <label for="gallery_description" class="form-label"><strong>Görsel Açıklaması</strong></label>
            <input type="text" name="description" id="gallery_description" class="form-control"
                value="{{ old('description', $image->description ?? '') }}">
        </div>
        <div class="mb-3 col-md-8">
            <label for="gallery_image" class="form-label"><strong>Görsel *</strong></label>
            <input type="file" name="image" id="gallery_image" class="form-control">
        </div>
        <div class="mb-3 col-md-4">
            @if (isset($image) && $image->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $image->image) }}" alt="Görsel" class="img-thumbnail" width="150">
                </div>
            @endif
        </div>
        <div class="mb-3 col-md-4">
            <button type="submit" class="btn btn-success">{{ isset($image) ? 'Güncelle' : 'Kaydet' }}</button>
        </div>
    </div>






</form>
@endsection