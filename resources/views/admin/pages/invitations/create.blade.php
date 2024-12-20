@extends('admin.layouts.layout-admin')

@section('dashboard-title')
Davet
@endsection

@section('dashboard-content-title')
Yeni Davet Oluştur
@endsection

@section('dashboard-content-direct-link')

@endsection

@section('dashboard-content-direct-link-name')

@endsection

@section('dashboard-content-direct-back')
{{route('admin.dashboard')}}
@endsection

@section('dashboard-content-direct-back-name')
Geri Dön
@endsection

@section('dashboard-content')
<form method="POST" action="{{ route('invitations.store') }}">
    @csrf
    <div>
        <label>Email:</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <button class="btn btn-secondary mt-1" type="submit">Davet Gönder</button>
</form>

@endsection