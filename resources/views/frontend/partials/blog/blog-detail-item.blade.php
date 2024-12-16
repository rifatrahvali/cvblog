<div class="col-md-12">
    <h1 class="mb-3">{{ $article->name }}</h1>
    <p class="text-muted">
        Kategori: {{ $article->category->name ?? 'Genel' }} | Yayın Tarihi:
        {{ $article->created_at->format('d M Y') }}
    </p>

    @if($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid mb-4" alt="{{ $article->name }}">
    @endif

    <div class="content">
        {!! $article->content !!}
    </div>
</div>