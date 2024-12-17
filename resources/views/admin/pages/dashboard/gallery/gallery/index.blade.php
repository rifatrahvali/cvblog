@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Galeri Görselleri')

@section('dashboard-content-title', 'Galeri Görsel Listesi')

@section('dashboard-content-direct-link'){{ route('dashboard.gallery.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Görsel Ekle')

@section('dashboard-content-direct-back'){{ route('dashboard.gallery') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')
<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Görsel</th>
                <th>Görsel Adı</th>
                <th>Görsel Açıklaması</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->name }}" width="50" height="50">
                </td>
                <td>{{ $image->name }}</td>
                <td>{{ $image->description }}</td>
                <td>
                    <a href="{{ route('dashboard.gallery.edit', $image->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                    <form action="{{ route('dashboard.gallery.destroy', $image->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection