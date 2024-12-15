@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Profil Kartları')

@section('dashboard-content-title', 'Profil Kartları Listesi')

@section('dashboard-content-direct-link'){{ route('dashboard.cv.profile.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Yeni Profil Kartı Ekle')

@section('dashboard-content-direct-back'){{ route('dashboard.cv') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')

<div class="container">
    <!-- Profil kartları tablosu -->
    <div class="table-responsive">
        <table class="table table align-middle">
            <thead>
                <th>Profil Resmi</th>
                <th>İsim</th>
                <th>Ünvan</th>
                <th>E-posta</th>
                <th>İşlemler</th>
            </thead>
            <tbody>
                @foreach($profileCards as $card)
                    <tr>
                        <td>
                            @if($card->profil_image)
                                <img src="{{ asset('storage/' . $card->profil_image) }}" style="width: 50px; height: 50px;">
                            @else
                            YOK
                            @endif
                        </td>
                        <td>{{ $card->fullname }}</td>
                        <td>{{ $card->title }}</td>
                        <td>{{ $card->email }}</td>
                        <td>
                            <a href="{{ route('dashboard.cv.profile.edit', $card->id) }}"
                                class="btn btn-warning btn-sm">Düzenle</a>
                            <form action="{{ route('dashboard.cv.profile.destroy', $card->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection