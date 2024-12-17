@extends('admin.layouts.layout-admin')

@section('dashboard-title')
Galeri
@endsection

@section('dashboard-content-title')
Galeri
@endsection

@section('dashboard-content-direct-link')

@endsection

@section('dashboard-content-direct-link-name')

@endsection

@section('dashboard-content-direct-back'){{ route('admin.dashboard') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')
<div class="col-lg-3 col-md-6 col-sm-12">
    <div class="custom-card text-center">
        <div class="custom-card-body">
            <div class="custom-card-title">
                <a href="{{ route('dashboard.gallery.index') }}">
                    <h3 class="fs-2"><i class="bi bi-camera2 me-4"></i>Galeri Kartı</h3>
                </a>
            </div>
            <p class="custom-card-text">Galery bilgilerinin tutulduğu kart alanıdır.</p>
        </div>
    </div>
</div>

@endsection