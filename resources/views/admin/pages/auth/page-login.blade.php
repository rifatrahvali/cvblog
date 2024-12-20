@extends('admin.layouts.layout-auth')

@section('auth-title', '#giriş')
@section('auth-content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <img class="mx-auto d-block" src="{{asset('assets/admin/images/auth-logo.png')}}" alt="" width="144" height="144">
    <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="isim@ornek.com.tr"
            value="{{ old('email') }}" required>
        <label for="email">Email Adresi</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Parolanız" required>
        <label for="password">Parola</label>
    </div>
    <button class="btn btn-secondary w-100 py-2 btnLogin" type="submit">Giriş</button>

    <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" name="remember" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Hatırla
        </label>
    </div>
</form>
@if($errors->any())
    <div style="color:red;">{{ $errors->first() }}</div>
@endif
@endsection