@extends('admin.layouts.layout-admin')

@section('dashboard-title')
Davet
@endsection

@section('dashboard-content-title')
Yeni Davet Oluştur
@endsection

@section('dashboard-content-direct-link')
{{ route('invitations.create') }}
@endsection

@section('dashboard-content-direct-link-name')
Yeni Davet Oluştur
@endsection

@section('dashboard-content-direct-back')
{{route('admin.dashboard')}}
@endsection

@section('dashboard-content-direct-back-name')
Geri Dön
@endsection

@section('dashboard-content')
<div class="table-responsive">
    <table border="1" class="table table align-middle">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Son Kullanma</th>
            <th>Kullanıldı mı?</th>
            <th>İşlemler</th>
        </tr>
        @foreach($invitations as $inv)
            <tr>
                <td>{{ $inv->id }}</td>
                <td>{{ $inv->email }}</td>
                <td>{{ $inv->expires_at }}</td>
                <td>{{ $inv->used ? 'Evet' : 'Hayır' }}</td>
                <td>
                    <form action="{{ route('invitations.destroy', $inv->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Bu daveti silmek istediğinize emin misiniz?')">
                            Sil
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection