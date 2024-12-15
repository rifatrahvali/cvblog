@extends('frontend.layouts.layout-frontend-reference')
@section('title-reference')
Referans
@endsection
@section('content-reference')
<div class="col-md-12">
    <div class="row g-4">
        <!-- Referans Card - Daha Fazla Kart Eklenebilir-->
        @include('frontend.partials.reference.item')
    </div>
</div>
@endsection()