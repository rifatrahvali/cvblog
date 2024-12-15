<div class="card mb-3 custom-card w-100">
    <div class="bg-light mt-1">
        @if(optional($profileCard)->profil_image)
            <img src="{{ asset('storage/' . $profileCard->profil_image) }}" alt="Profil Resmi"
                class="card-img-top profile-pic">
        @else
            <span class="text-muted">Yok</span>
        @endif
    </div>
    <div class="card-body bg-light">
        <h4 class="card-title"><b>{{ $profileCard->fullname ?? '' }}</b></h4>
    </div>
    <ul class="list-group list-group-flush d-flex bg-light">
        <li class="list-group-item social-icons bg-light">

            <a href="#">{{ $profileCard->title ?? '' }}</a>

        </li>
    </ul>
    <div class="card-body bg-light">
        <div class="social-icons">

            <a href="mailto:{{ $profileCard->email ?? '' }}" class="card-link">
                <i class="bi bi-envelope-fill"></i>
            </a>
            <a href="{{ $profileCard->github_link ?? '' }}"><i class="bi bi-github"></i></a>
            <a href="{{ $profileCard->instagram_link ?? '' }}"><i class="bi bi-instagram"></i></a>
            <a href="{{ $profileCard->x_link ?? '' }}"><i class="bi bi-twitter-x"></i></a>
            <a href="{{ $profileCard->linkedin_link ?? '' }}"><i class="bi bi-linkedin"></i></a>
            <a href="{{ $profileCard->youtube_link ?? '' }}"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</div>