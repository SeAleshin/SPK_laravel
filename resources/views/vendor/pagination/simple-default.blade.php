@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        <div class="previous_button_wrapper">
            @if ($paginator->onFirstPage())
                <div class="disabled" aria-disabled="true"><span>Первая страница</span></div>
            @else
                <div><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="previous_button">« Предыдущая</a></div>
            @endif
        </div>

        {{-- Next Page Link --}}
        <div class="next_button_wrapper">
            @if ($paginator->hasMorePages())
                <div><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next_button">Следующая »</a></div>
            @else
                <div class="disabled" aria-disabled="true"><span>Последняя страница</span></div>
            @endif
        </div>
    </div>
@endif
