@extends('frontend.layouts.layout-frontend-gallery')
@section('title-gallery')
Galeri
@endsection
@section('content-gallery')
<div class="col-md-12">
    <div class="row gallery g-3">
        <!-- Galeri Öğesi -->
        @include('frontend.partials.gallery.item')
        <!-- Diğer Galeri Öğeleri -->
    </div>

    <!-- Modal - item modal -->
    @include('frontend.partials.gallery.modal')
</div>
@endsection()