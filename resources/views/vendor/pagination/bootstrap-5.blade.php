@if ($paginator->hasPages())
<small class="text-muted">
    {!! __('Showing') !!}
    <span class="font-medium">{{ $paginator->firstItem() }}</span>
    {!! __('to') !!}
    <span class="font-medium">{{ $paginator->lastItem() }}</span>
    {!! __('of') !!}
    <span class="font-medium">{{ $paginator->total() }}</span>
    {!! __('results') !!}
</small>
@php
    $loaded = (($paginator->lastItem())/($paginator->total()))*100;
@endphp
<div class="progress f-h-1 mt-3">
    <div class="progress-bar bg-dark" role="progressbar" style="width: {{ round($loaded) }}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
    <nav class="d-flex align-self-center justify-items-center justify-content-between pt-2">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                @else
                    <a class="btn btn-outline-dark btn-sm mt-2 py-2 px-3 border-2" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="btn btn-outline-dark btn-sm mt-2 py-2 px-3 border-2" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                    @else
                        <a class="btn btn-outline-dark btn-sm mt-2 py-2 px-3 border-2" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Previous</a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span class="btn btn-outline-dark btn-sm mt-2 py-2 px-3 border-2">{{ $element }}</span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="btn btn-outline-dark btn-sm mt-2 py-2 px-3 border-2">{{ $page }}</span>
                                @else
                                    <a class="btn btn-outline-dark btn-sm mt-2 py-2 px-3 border-2" href="{{ $url }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                            <a class="btn btn-outline-dark btn-sm mt-2 py-2 px-3 border-2 " href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
