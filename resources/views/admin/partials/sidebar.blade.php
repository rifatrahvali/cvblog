<div class="sidebar col-md-3 col-lg-2 p-0 ">
    <div class="offcanvas-md offcanvas-end " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">rahvali</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('dashboard.cv')}}">
                        <i class="bi bi-file-earmark-person mb-1"></i>
                        CV - Yönetimi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('dashboard.blog')}}">
                        <i class="bi bi-pencil-square mb-1"></i>
                        Yazı - Yönetimi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('dashboard.gallery')}}">
                        <i class="bi bi-camera mb-1"></i>
                        Galeri - Yönetimi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('dashboard.support')}}">
                        <i class="bi bi-chat-left-quote mb-1"></i>
                        Destek - Yönetimi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('dashboard.reference')}}">
                        <i class="bi bi-folder-check mb-1"></i>
                        Referanslar - Yönetimi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('invitations.index')}}">
                        <i class="bi bi-people-fill  mb-1"></i>
                        Kullanıcı Daveti
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="bi bi-graph-up-arrow mb-1"></i>
                        Raporlar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('site.settings.edit')}}">
                        <i class="bi bi-gear-wide-connected mb-1"></i>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="bi bi-door-closed mb-1"></i>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-secondary-sm" type="submit">Oturumu Kapat</button>
                        </form>
                    </a>

                </li>

            </ul>
        </div>
    </div>
</div>