@foreach ($categories as $cat)
<div class="category-card">
    <h5 class="m-0">
        <a href="" class="text-decoration-none text-dark">
        {{ $cat->name }}
        </a>
    </h5>
    <small class="text-muted">{{ $cat->articles_count }} Blog</small>
    <div class="line mb-3 mt-0"></div>
</div>
@endforeach

    