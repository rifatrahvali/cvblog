@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Çalışma Deneyimleri')

@section('dashboard-content-title', 'Çalışma Deneyimleri Listesi')

@section('dashboard-content-direct-link'){{ route('dashboard.cv.experiences.create') }}@endsection
@section('dashboard-content-direct-link-name', 'Yeni Çalışma Deneyimi Ekle')
@section('dashboard-content-direct-back'){{ route('dashboard.cv') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection
@section('dashboard-content')

<div class="container">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <th>#</th>
                <th>Şirket Adı</th>
                <th>Başlangıç Tarihi</th>
                <th>Bitiş Tarihi</th>
                <th>Departman</th>
                <th>Ünvan</th>
                <th>İşlem</th>
            </thead>
            <tbody>
                @foreach($experiences as $key => $experience)
                    <tr>
                        <td>{{ $experience->id }}</td>
                        <td>{{ $experience->company_name }}</td>
                        <td>{{ $experience->start_date }}</td>
                        <td>{{ $experience->end_date ?? 'Devam Ediyor' }}</td>
                        <td>{{ $experience->department }}</td>
                        <td>{{ $experience->title }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('dashboard.cv.experiences.edit', $experience->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                            <form action="{{ route('dashboard.cv.experiences.destroy', $experience->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bu deneyimi silmek istediğinize emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
