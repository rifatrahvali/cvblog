<div class="col-md-12">
    <!-- Blog Kartları -->
    @if($articles->count())
        @foreach($articles as $article)
            <div class="card blog-card mb-1 shadow-sm">
                <div class="row g-0">
                    <!-- Görsel Alanı -->
                    <div class="col-md-4">
                        <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('assets/frontend/images/default.png') }}"
                            class="img-fluid rounded-start" alt="{{ $article->name }}">
                    </div>
                    <!-- İçerik Alanı -->
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-center">

                            <h5 class="blog-card-title mb-2">
                                <a href="{{ route('blog.detail', $article->slug) }}" class="blog-card-link">
                                    {{ $article->name }}
                                </a>
                            </h5>
                            <p class="blog-card-text mb-2">
                                {{ Str::limit(strip_tags($article->content), 150, '...') }}
                            </p>
                            <div class="d-flex justify-content-between" style="margin-bottom: 0;">
                                <a href="#" class="blog-card-category text-uppercase text-muted">
                                    Kategori:
                                    {{ $article->category->name ?? 'Genel' }}
                                </a>
                                <p class="blog-card-time"><small
                                        class="text-muted">{{ $article->created_at->format('d M Y') }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center">Arama sonucuna uygun blog bulunamadı.</p>
    @endif
</div>