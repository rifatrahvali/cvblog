@foreach ($categories as $category)
    <div class="category-card d-flex">
        <h5 class="">
            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="text-decoration-none text-dark">
                {{ $category->name }}
            </a>
        </h5>
        <h6 class="text-muted ms-1">({{ $category->articles()->count() }}) Blog</h6>
    </div>
    <div class="category-card">
        <div class="line mb-3"></div>
    </div>
@endforeach