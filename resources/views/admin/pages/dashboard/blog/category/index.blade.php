@extends('admin.layouts.layout-admin')

@section('dashboard-title')
Blog Kategori Yönetimi
@endsection

@section('dashboard-content-title')
Blog Kategori Yönetimi
@endsection

@section('dashboard-content-direct-link')
{{route('blog.categories.create')}}
@endsection

@section('dashboard-content-direct-link-name')
Kategori Oluştur
@endsection

@section('dashboard-content-direct-back')
{{route('dashboard.blog')}}
@endsection

@section('dashboard-content-direct-back-name')
Geri Dön
@endsection

@section('dashboard-content')
<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Görsel</th>
                <th>Kategori ADI</th>
                <th>Üst Kategorisi</th>
                <th>Görünüm Durumu</th>
                <th>Ekleme Tarihi</th>
                <th>İşlem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        @if($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" alt="Görsel" width="50">
                        @else
                            <span>Görsel Yok</span>
                        @endif
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent ? $category->parent->name : 'Yok' }}</td>
                    <td>
                        <span class="badge {{ $category->is_visible ? 'bg-success' : 'bg-danger' }}">
                            {{ $category->is_visible ? 'Görünür' : 'Görünmez' }}
                        </span>
                    </td>
                    <td>{{ $category->created_at->format('Y-m-d') }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('blog.categories.edit', $category->id) }}"
                            class="btn btn-sm btn-warning">Düzenle</a>
                        <form action="{{ route('blog.categories.destroy', $category->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection