@if ($paginator->hasPages())
    <ul class="pagination mb-0">
        {{-- Önceki Sayfa Bağlantısı --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-disabled="true">«</a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a>
            </li>
        @endif

        {{-- Sayfa Numaraları --}}
        @foreach ($elements as $element)
            {{-- "..." gibi boşluklar --}}
            @if (is_string($element))
                <li class="page-item disabled">
                    <a class="page-link">{{ $element }}</a>
                </li>
            @endif

            {{-- Sayfa Numaralarını Listeleme --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Sonraki Sayfa Bağlantısı --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">»</a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-disabled="true">»</a>
            </li>
        @endif
    </ul>
@endif
