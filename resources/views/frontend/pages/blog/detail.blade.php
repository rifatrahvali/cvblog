@extends('frontend.layouts.layout-frontend-blog')
@section('title-blog')
Yazılar
@endsection
@section('content-blog')
<!-- Sol -->
<div class="col-md-8">
    <!-- BAŞLIK & PAGINATION BÖLÜMÜ -->
    @if(isset($articles) && $articles->hasPages())
        <div
            class="header-section d-flex flex-column flex-md-row flex-wrap align-items-center justify-content-between gap-3 mb-1">
            @include('frontend.partials.blog.search')
            <h2 class="text-center text-md-start mb-2 mb-md-0">Yazılar</h2>
            @include('frontend.partials.pagination')
        </div>
    @endif


    <!-- BLOG BÖLÜMÜ -->
    <div class="row g-0">
        <!-- BLOG CARD -->
        @include('frontend.partials.blog.blog-detail-item')
    </div>
</div>

<!-- Sağ -->
<div class="col-md-4">
    <div class="row">
        <h2 class="">Kategoriler</h2>
    </div>
    <!-- Kategori Listesi -->
    <div class="row">
        @include('frontend.partials.category.category-item')
    </div>
</div>
@endsection()