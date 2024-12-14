<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('dashboard-title', 'Dashboard')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/admin/images/profil.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dashboard.css') }}">
</head>

<body>
    <!-- Sayfanın üst kısmında sabit navbar. -->
    @include('admin.partials.header')


    <!-- side bar & Mobile - İÇERİK-->
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            @include('admin.partials.sidebar')

            <!-- İÇERİKLER -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- İÇERİK BAŞLIK -->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>@yield('dashboard-content-title')</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- dashboard-content-direct-link boş ise etiketi sil -->
                            @if(trim($__env->yieldContent('dashboard-content-direct-link', '')) !== '')
                                <a href="{{ $__env->yieldContent('dashboard-content-direct-link') }}"
                                    class="btn btn-secondary">
                                    {{ $__env->yieldContent('dashboard-content-direct-link-name', 'Default Name') }}
                                </a>
                            @endif
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-file-earmark-excel-fill"></i> Dışa aktar
                            </button>
                            @if(trim($__env->yieldContent('dashboard-content-direct-back', '')) !== '')
                                <a href="{{ $__env->yieldContent('dashboard-content-direct-back') }}"
                                    class="btn btn-secondary">
                                    {{ $__env->yieldContent('dashboard-content-direct-back-name', 'Default Back Name') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Durum & Hata Mesajları -->
                    <div class="row">
                        @include('admin.partials.message')
                    </div>
                    <!-- İÇERİK GÖVDE -->
                    <div class="row">
                        @yield('dashboard-content')
                    </div>
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/admin/js/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>