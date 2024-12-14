<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('auth-title', '#dev')</title>
    <link rel="icon" href="{{ asset('assets/admin/images/auth-logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/sign-in.css') }}">


</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        @yield('auth-content')
    </main>


    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>