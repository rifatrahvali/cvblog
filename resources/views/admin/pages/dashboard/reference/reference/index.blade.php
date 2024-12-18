@extends('admin.layouts.layout-admin')

@section('dashboard-title', 'Referans Görselleri')

@section('dashboard-content-title') Referans Listesi @endsection

@section('dashboard-content-direct-link'){{ route('dashboard.reference.create') }}@endsection

@section('dashboard-content-direct-link-name', 'Referans Ekle')

@section('dashboard-content-direct-back'){{ route('dashboard.reference') }}@endsection

@section('dashboard-content-direct-back-name') Geri Dön @endsection

@section('dashboard-content')
<div class="table-responsive">
<table class="table table-striped align-middle">
    <thead>
        <tr>
            <th>#</th>
            <th>Görsel</th>
            <th>Ad</th>
            <th>Açıklama</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($references as $reference)
        <tr>
            <td>{{ $reference->id }}</td>
            <td><img src="{{ asset('storage/' . $reference->reference_image) }}" width="50" alt="{{ $reference->reference_name }}"></td>
            <td>{{ $reference->reference_name }}</td>
            <td>{{ $reference->reference_comment }}</td>
            <td>
                <a href="{{ route('dashboard.reference.edit', $reference) }}" class="btn btn-warning">Düzenle</a>
                <form action="{{ route('dashboard.reference.destroy', $reference) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" type="submit">Sil</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection