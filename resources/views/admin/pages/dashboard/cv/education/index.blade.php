@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Eğitim Kartları')

@section('dashboard-content-title', 'Eğitim Kartları Listesi')
@section('dashboard-content-direct-link'){{ route('dashboard.cv.education.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Yeni Eğitim Kartı Ekle')
@section('dashboard-content-direct-back'){{ route('dashboard.cv') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection
@section('dashboard-content')
<div class="container">
    <div class="table-responsive">
        <table class="table table align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Eğitim Seviyesi</th>
                    <th>Şehir</th>
                    <th>Okul</th>
                    <th>Bölüm</th>
                    <th>Başlangıç Tarihi</th>
                    <th>Bitiş Tarihi</th>
                    <th>İşlem</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($educationCards as $index => $card)
                    <tr>
                        <td>{{ $card->id }}</td>
                        <td>{{ $card->section }}</td>
                        <td>{{ $card->city }}</td>
                        <td>{{ $card->school_name }}</td>
                        <td>{{ $card->department }}</td>
                        <td>{{ $card->start_year }}</td>
                        <td>{{ $card->end_year ?? 'Devam Ediyor' }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('dashboard.cv.education.edit', $card->id) }}"
                                class="btn btn-sm btn-warning w-100">Düzenle</a>
                            <form action="{{ route('dashboard.cv.education.destroy', $card->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger w-100 mt-1"
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