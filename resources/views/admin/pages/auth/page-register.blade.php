@extends('admin.layouts.layout-auth')

@section('auth-title', '#kayıt')
@section('auth-content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $invitation->token }}">
    <img class="mx-auto d-block" src="{{asset('assets/admin/images/auth-logo.png')}}" alt="" width="144" height="144">
    <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
            placeholder="name@example.com" value="{{ $invitation->email }}" readonly> 
        <label for="email">Email (Davet Edilen: {{ $invitation->email }})</label>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            placeholder="İsim" required value="{{ old('name') }}">
        <label for="name">İsim</label>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname"
            placeholder="Soyadı" required value="{{ old('surname') }}">
        <label for=" surname">Soyadı</label>
        @error('surname')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
            name="password" placeholder="Password" required>
        <label for="floatingPassword">Parola</label>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
            id="password_confirmation" name="password_confirmation" placeholder="Password" required>
        <label for="password_confirmation">Parola (Tekrar)</label>
        @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-secondary btnRegister w-100 py-2" type="submit">Kayıt</button>
</form>
@if($errors->any())
    <div style="color:red;">{{ $errors->first() }}</div>
@endif
@endsection