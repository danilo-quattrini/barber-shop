@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{!! __('Pagination Navigation') !!}">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <x-button color="off">
                {!! __('pagination.previous') !!}
            </x-button>
        @else
            <x-button color="white" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                {!! __('pagination.previous') !!}
            </x-button>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <x-button color="white" href="{{ $paginator->nextPageUrl() }}" rel="next">
                {!! __('pagination.next') !!}
            </x-button>
        @else
            <x-button color="off">
                {!! __('pagination.next') !!}
            </x-button>
        @endif
    </nav>
@endif
