@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Hakkımda Kartları')

@section('dashboard-content-title', 'Hakkımda Kartları Listesi')

@section('dashboard-content-direct-link'){{ route('about-card.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Yeni Profil Kartı Ekle')

@section('dashboard-content-direct-back'){{ route('cv.index') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')

<div class="container">
    <!-- Hakkımda kartları tablosu -->
    <div class="table-responsive">
    <table class="table table align-middle">
        <thead>
            <th>Açıklama</th>
            <th>İşlem</th>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <td>{{ $about->description }}</td>
                <td class="action-buttons">
                    <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-sm btn-warning w-100">Düzenle</a>
                    <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger w-100 mt-1">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection