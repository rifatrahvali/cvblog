<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>@yield('title-reference')</title>
    <link rel="icon" href="{{ asset('assets/frontend/images/fav-logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/styles.css')}}">
</head>
<body class="bg-light">
    <div class="container">
        @include('frontend.partials.header')
        <div class="line mb-3"></div>
        <div class="row">
            @yield('content-reference')
        </div>
        @include('frontend.partials.footer')
    </div>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>