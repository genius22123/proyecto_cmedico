<div>
    @if ($paginator->hasPages())
        <nav class="d-flex justify-content-between pt-2">
            <ul class="pagination ">
     
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link" aria-hidden="true"><i class="bi bi-arrow-left-short me-2"></i>Anterior</span>
                    </li>
                @else
                    <li class="page-item">
                        <button type="button" dusk="previousPage" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')"><i class="bi bi-arrow-left-short me-2"></i>Anterior</button>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" wire:key="paginator-page-{{ $page }}" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item" wire:key="paginator-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <button type="button" dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">Siguiente<i class="bi bi-arrow-right-short ms-2"></i></button>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link" aria-hidden="true">Siguiente<i class="bi bi-arrow-right-short ms-2"></i></span>
                    </li>
                @endif
            </ul>
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    <span>{!! __('Mostrando') !!}</span>
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    <span>{!! __('a') !!}</span>
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    <span>{!! __('de') !!}</span>
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    <span>{!! __('resultados') !!}</span>
                </p>
            </div>
        </nav>
    @endif
</div>