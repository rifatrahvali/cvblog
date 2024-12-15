@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Öğrenilen Tecrübeler')

@section('dashboard-content-title', 'Öğrenilen Tecrübeler Listesi')

@section('dashboard-content-direct-link'){{ route('dashboard.cv.learned-experiences.create') }}@endsection
@section('dashboard-content-direct-link-name', 'Yeni Öğrenilen Tecrübe Ekle')
@section('dashboard-content-direct-back'){{ route('dashboard.cv') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')

<div class="container">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <th>#</th>
                <th>Şirket Adı</th>
                <th>İş Açıklama</th>
                <th>Bölüm</th>
                <th>Etiketler</th>
                <th>İşlem</th>
            </thead>
            <tbody>
                @foreach($learnedExperiences as $key => $learnedExperience)
                    <tr>
                        <td>{{ $learnedExperience->id }}</td>
                        <td>{{ $learnedExperience->experience->company_name }}</td>
                        <td>{{ $learnedExperience->sentence }}</td>
                        <td>{{ $learnedExperience->section }}</td>
                        <td>{{ $learnedExperience->work_tags }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('dashboard.cv.learned-experiences.edit', $learnedExperience->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                            <form action="{{ route('dashboard.cv.learned-experiences.destroy', $learnedExperience->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bu tecrübeyi silmek istediğinize emin misiniz?')">Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
