@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Eğitim Sürecindeki Deneyimler')

@section('dashboard-content-title', 'Eğitim Sürecindeki Deneyimler Listesi')

@section('dashboard-content-direct-link'){{ route('dashboard.cv.learned-education.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Yeni Eğitim Deneyimi Ekle')

@section('dashboard-content-direct-back'){{ route('dashboard.cv') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection

@section('dashboard-content')

<div class="container">
    <div class="table-responsive">
        <table class="table table align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Okul</th>
                    <th>Derece</th>
                    <th>Ana Kazanım</th>
                    <th>Yan Kazanımlar</th>
                    <th>İşlem</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($learnedFromEducationCards as $index => $card)
                    <tr>
                        <td>{{ $card->id }}</td>
                        <td>{{ $card->educationCard->school_name }}</td>
                        <td>{{ $card->degree }}</td>
                        <td>{{ $card->main_achievement }}</td>
                        <td>{{ is_array(json_decode($card->secondary_achievements, true)) ? implode(', ', json_decode($card->secondary_achievements, true)) : $card->secondary_achievements }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('dashboard.cv.learned-education.edit', $card->id) }}" class="btn btn-sm btn-warning w-100">Düzenle</a>
                            <form action="{{ route('dashboard.cv.learned-education.destroy', $card->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger w-100 mt-1" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
