@if ($paginator->hasPages())
    <div class="pagination">
        <div class="pagination__numbers">
            @if ($paginator->onFirstPage())
                <a class="no-hover">
                    <i class="la la-angle-left"></i>
                </a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}">
                    <i class="la la-angle-left"></i>
                </a>
            @endif

            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span>{{ $page }}</span>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}">
                    <i class="la la-angle-right"></i>
                </a>
            @else
                <a class="no-hover">
                    <i class="la la-angle-right"></i>
                </a>
            @endif
        </div>
    </div>
@endif
