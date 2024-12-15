@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Sertifika Bilgileri Kartı')

@section('dashboard-content-title', 'Sertifika Kartları Listesi')
@section('dashboard-content-direct-link'){{ route('dashboard.cv.certificates.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Yeni Sertifika Kartı Ekle')
@section('dashboard-content-direct-back'){{ route('dashboard.cv') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection

@section('dashboard-content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Sertifika Adı</th>
                    <th>Kurum</th>
                    <th>Alan</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificates as $index => $certificate)
                    <tr>
                        <td>{{ $certificate->id }}</td>
                        <td>{{ $certificate->certificate_name }}</td>
                        <td>{{ $certificate->institution }}</td>
                        <td>{{ $certificate->field }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('dashboard.cv.certificates.edit', $certificate->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                            <form action="{{ route('dashboard.cv.certificates.destroy', $certificate->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
