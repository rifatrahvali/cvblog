@extends('admin.layouts.layout-admin')

@section('dashboard-title')
Yazı Yönetimi
@endsection

@section('dashboard-content-title')
Yazı Yönetimi Oluştur / Güncelle
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
    action="{{ isset($article) ? route('blog.articles.update', $article->id) : route('blog.articles.store') }}"
    enctype="multipart/form-data">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @csrf
    @if(isset($article))
        @method('PUT')
    @endif

    <!-- Üst Kategori -->
    <div class="col-md-5">
        <label for="category_id" class="form-label"><strong>Kategori *</strong></label>
        <select id="category_id" name="category_id" class="form-select" required>
            <option value="" selected>Kategori Seçin</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ isset($article) && $article->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Makale Başlığı -->
    <div class="col-md-7">
        <label for="name" class="form-label"><strong>Yazı Başlığı *</strong></label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $article->name ?? '') }}"
            required>
    </div>

    <!-- Görünürlük -->
    <div class="col-md-3">
        <label for="is_visible" class="form-label"><strong>Görünürlük</strong></label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_visible" name="is_visible" value="1" {{ isset($article) && $article->is_visible ? 'checked' : '' }}>
            <label class="form-check-label" for="is_visible">Görünür</label>
        </div>
    </div>

    <!-- Etiketler -->
    <div class="col-md-9">
        <label for="tags" class="form-label"><strong>Yazı Etiketleri (virgül ile ayırınız.)</strong></label>
        <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags', $article->tags ?? '') }}">
    </div>

    <!-- İçerik -->
    <div class="col-md-12">
        <label for="content" class="form-label"><strong>İçerik *</strong></label>
        <textarea id="content" class="form-control" name="content"
            required>{{ old('content', $article->content ?? '') }}</textarea>
    </div>

    <!-- Görsel -->
    <div class="col-md-8">
        <label class="form-label" for="image"><strong>Kapak Görseli</strong></label>
        <input type="file" class="form-control" name="image" id="image">


        <!-- Kaydet Butonu -->
        <div class="d-grid gap-2 col-8 mx-auto mt-4">
            <button class="btn btn-success" type="submit">Ekle</button>
        </div>
    </div>
    @if(isset($article) && $article->image)
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $article->image) }}" class="img-thumbnail" alt="Makale Görseli">
        </div>
    @else
        <div class="col-md-4">

            <img src="" class="img-thumbnail" alt="Görsel yok">
        </div>
    @endif


</form>
@endsection