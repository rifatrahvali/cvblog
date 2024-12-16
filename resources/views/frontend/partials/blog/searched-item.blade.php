@if($articles->isEmpty())
    <p class="text-muted">Arama sonucuna göre blog bulunamadı.</p>
@else
    @foreach($articles as $article)
        <div class="col-md-12">
            <div class="card blog-card mb-3 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded-start"
                            alt="{{ $article->name }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="blog-card-title">
                                <a href="{{ route('blog.detail', $article->slug) }}" class="text-dark">{{ $article->name }}</a>
                            </h5>
                            <p class="blog-card-text">{{ Str::limit(strip_tags($article->content), 150) }}</p>
                            <p class="text-muted mb-0">
                                Kategori: {{ $article->category->name ?? 'Genel' }} | Tarih:
                                {{ $article->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endif