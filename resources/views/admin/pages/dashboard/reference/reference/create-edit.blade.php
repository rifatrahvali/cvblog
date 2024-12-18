@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Oluştur')

@section('dashboard-content-title', 'Referans Bilgi Oluştur')

@section('dashboard-content-direct-link')@endsection

@section('dashboard-content-direct-link-name')@endsection

@section('dashboard-content-direct-back'){{ route('dashboard.reference.index') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')
<form method="POST" action="{{ isset($reference) ? route('dashboard.reference.update', $reference) : route('dashboard.reference.store') }}" enctype="multipart/form-data">
    @csrf
    @if (isset($reference)) @method('PUT') @endif

    <div class="mb-3">
        <label>Referans Adı *</label>
        <input type="text" name="reference_name" class="form-control" value="{{ $reference->reference_name ?? '' }}" required>
    </div>

    <div class="mb-3">
        <label>Referans Açıklama</label>
        <input type="text" name="reference_comment" class="form-control" value="{{ $reference->reference_comment ?? '' }}">
    </div>

    <div class="mb-3">
        <label>Görsel *</label>
        <input type="file" name="reference_image" class="form-control">
    </div>

    <button class="btn btn-success" type="submit">Kaydet</button>
</form>
@endsection