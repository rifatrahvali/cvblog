<div class="container p-0 mb-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#">
                <h1>{{ $siteSettings->header_title ?? 'Default Title' }}</h1>
                <h4>{{ $siteSettings->header_subtitle ?? 'Default Subtitle' }}</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('cv.index') }}"
                            class="btn btn-outline-dark pages mt-1 btn-square-black">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog.index') }}"
                            class="btn btn-outline-dark pages mt-1  btn-square-black">Yazılar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery.index') }}"
                            class="btn btn-outline-dark pages mt-1 btn-square-black">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('support.index') }}"
                            class="btn btn-outline-dark pages mt-1  btn-square-black">Destek</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reference.index') }}"
                            class="btn btn-outline-dark pages mt-1  btn-square-black">Referans</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>