@extends('admin.layouts.layout-admin')

@section('dashboard-title')
YazıYönetimi
@endsection

@section('dashboard-content-title')
Yazı Yönetimi
@endsection

@section('dashboard-content-direct-link')
{{route('blog.articles.create')}}
@endsection

@section('dashboard-content-direct-link-name')
Yazı Oluştur
@endsection

@section('dashboard-content-direct-back')
{{route('dashboard.blog')}}
@endsection

@section('dashboard-content-direct-back-name')
Geri Dön
@endsection
@section('dashboard-content')
<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>Görünürlük</th>
                <th>Oluşturulma Tarihi</th>
                <th>İşlem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->name }}</td>
                <td>{{ $article->category->name ?? 'Kategori Yok' }}</td>
                <td>
                    <span class="badge {{ $article->is_visible ? 'bg-success' : 'bg-danger' }}">
                        {{ $article->is_visible ? 'Görünür' : 'Gizli' }}
                    </span>
                </td>
                <td>{{ $article->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('blog.articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                    <form action="{{ route('blog.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
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
@endsection