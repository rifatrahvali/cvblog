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
                <th>Kullanıcı Adı</th>
                <th>E-posta</th>
                <th>İşlemler</th>
            </thead>
            <tbody>
                @foreach($profileCards as $card)
                    <tr>
                        <td>
                            @if($card->profile_image)
                                <img src="{{ asset('storage/' . $card->profile_image) }}" alt="Profil Resmi" width="50">
                            @else
                                Yok
                            @endif
                        </td>
                        <td>{{ $card->name }}</td>
                        <td>{{ $card->username }}</td>
                        <td>{{ $card->email }}</td>
                        <td>
                            <a href="{{ route('profile-card.edit', $card->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                            <form action="{{ route('profile-card.destroy', $card->id) }}" method="POST"
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