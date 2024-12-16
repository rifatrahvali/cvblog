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

@endsection

@section('dashboard-content-direct-back-name')

@endsection

@section('dashboard-content')
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="{{ route('blog.categories.index') }}">
                    <h3 class="fs-2"><i class="bi bi-envelope-paper-fill me-4"></i>Kategoriler</h3>
                </a>
            </div>
            <p class="custom-card-text">Mevcut blog kategorilerin listelendiği ve eklendiği kısım.</p>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="{{ route('blog.articles.index') }}">
                    <h3 class="fs-2"><i class="bi bi-camera-video me-4"></i>Yazılar</h3>
                </a>
            </div>
            <p class="custom-card-text">Mevcut blog yazılarının listelendiği ve eklendiği kısım.</p>
        </div>
    </div>
</div>

@endsection