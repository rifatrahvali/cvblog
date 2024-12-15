@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Hakkımda Bilgileri')

@section('dashboard-content-title', 'Hakkımda Bilgileri Listesi')

@section('dashboard-content-direct-link'){{ route('dashboard.cv.about.create') }}@endsection
@section('dashboard-content-direct-link-name', 'Yeni Hakkımda Bilgisi Ekle')

@section('dashboard-content')

<div class="container">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <th>Açıklama</th>
                <th>İşlem</th>
            </thead>
            <tbody>
                @foreach($aboutCards as $card)
                    <tr>
                        <td>{{ $card->description }}</td>
                        <td>
                            <a href="{{ route('dashboard.cv.about.edit', $card->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                            <form action="{{ route('dashboard.cv.about.destroy', $card->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
