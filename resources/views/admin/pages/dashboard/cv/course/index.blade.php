@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Kurs Bilgileri Kartı')

@section('dashboard-content-title', 'Kurs Kartları Listesi')
@section('dashboard-content-direct-link'){{ route('dashboard.cv.courses.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Yeni Kurs Kartı Ekle')
@section('dashboard-content-direct-back'){{ route('dashboard.cv') }}@endsection

@section('dashboard-content-direct-back-name')Geri Dön @endsection

@section('dashboard-content')
<div class="table-responsive">
    <table class="table table align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Kursun Adı</th>
                <th>Kurum</th>
                <th>Kazanımlar</th>
                <th>İşlem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $index => $course)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->institution }}</td>
                    <td>{{ implode(', ', json_decode($course->additional_achievements, true) ?? []) }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('dashboard.cv.courses.edit', $course->id) }}"
                            class="btn btn-sm btn-warning w-100">Düzenle</a>
                        <form action="{{ route('dashboard.cv.courses.destroy', $course->id) }}" method="POST"
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
@endsection