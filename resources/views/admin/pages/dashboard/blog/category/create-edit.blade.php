@extends('admin.layouts.layout-admin')

@section('dashboard-title')
Blog Yönetimi
@endsection

@section('dashboard-content-title')
Blog Yönetimi
@endsection

@section('dashboard-content-direct-link')

@endsection

@section('dashboard-content-direct-link-name')

@endsection

@section('dashboard-content-direct-back')
{{ route('blog.categories.index') }}
@endsection

@section('dashboard-content-direct-back-name')
Geri Dön
@endsection

@section('dashboard-content')
<form class="row g-3" method="POST"
    action="{{ isset($category) ? route('blog.categories.update', $category->id) : route('blog.categories.store') }}" enctype="multipart/form-data">
    @csrf
    @if(isset($category))
        @method('PUT')
    @endif
    <!-- Slug Alanı Gizli -->
    <input type="hidden" id="slug" name="slug" value="{{ old('slug', $category->slug ?? '') }}">
    <!-- Görünürlük Durumu -->
    <div class="col-md-2">
        <label for="is_visible" class="form-label"><strong>Görünürlük Durumu</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_visible" name="is_visible" value="1" {{ isset($category) && $category->is_visible ? 'checked' : '' }}>
            <label class="form-check-label" for="is_visible">
                Görünür
            </label>
        </div>
    </div>

    <!-- Üst Kategori -->
    <div class="col-md-4">
        <label for="categories" class="form-label"><strong>Üst Kategori</strong></label>
        <select id="categories" name="parent_id" class="form-select">
            <option value="" selected>Üst Kategori Seçin</option>
            @if(isset($categories) && $categories->count())
                @foreach($categories as $parent)
                    <option value="{{ $parent->id }}">
                        {{ $parent->name }}
                    </option>
                @endforeach
            @else
                <option value="">Kategori Bulunamadı</option>
            @endif
        </select>
    </div>

    <!-- Kategori Başlığı -->
    <div class="col-md-6">
        <label for="name" class="form-label"><strong>Kategori Adı *</strong></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            placeholder="Kategori Adı (Network, Fotoğraf vb.) *" value="{{ old('name', $category->name ?? '') }}"
            required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Kategori Tanımlaması -->
    <div class="col-md-6">
        <label for="description" class="form-label"><strong>Kategori Tanımlaması</strong></label>
        <input type="text" class="form-control" id="description" name="description"
            placeholder="Kategori Tanımlaması Girin" value="{{ old('description', $category->description ?? '') }}">
    </div>

    <!-- Kategori Etiketleri -->
    <div class="col-md-6">
        <label for="tags" class="form-label"><strong>Kategori Etiketleri (virgül ile ayırınız.)</strong></label>
        <input type="text" class="form-control" id="tags" name="tags"
            placeholder="Kategori Etiketleri (virgül ile ayırınız.)" value="{{ old('tags', $category->tags ?? '') }}">
    </div>

    <!-- Kategori Görseli -->
    <div class="col-md-8">
        <label class="input-group-text mb-2" for="image">Referans Görseli *</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>

    <!-- Görsel Önizleme -->
    <div class="col-md-4">
        <img src="{{ isset($category) && $category->image ? asset('storage/' . $category->image) : asset('assets/admin/images/profil.png') }}"
            class="img-thumbnail" alt="Görsel">
    </div>

    <!-- Ekle/Güncelle Butonu -->
    <div class="d-grid gap-2 col-8 mx-auto mt-4">
        <button class="btn btn-secondary" type="submit">{{ isset($category) ? 'Güncelle' : 'Ekle' }}</button>
    </div>
</form>

@endsection