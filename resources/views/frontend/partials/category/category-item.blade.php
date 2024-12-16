@foreach ($categories as $category)
<div class="category-card">
    <h5 class="m-0">
        <a href="{{ route('blog.index', ['category' => $category->id]) }}" class="text-decoration-none text-dark">
        {{ $category->name }}
        </a>
    </h5>
    <small class="text-muted">({{ $category->articles()->count() }}) Blog</small>
    <div class="line mb-3 mt-0"></div>
</div>
@endforeach

    