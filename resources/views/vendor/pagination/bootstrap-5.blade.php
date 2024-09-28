@if ($paginator->hasPages())
    <nav aria-label="Page navigation example" class=" d-flex justify-items-center justify-content-center mt-5 "
         dir="ltr" >

                <ul class="pagination "  >
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link text-light border-0" aria-hidden="true" style="background-color: #4867BC;">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a style="background-color: #4867BC;" class="border-0 page-link text-light" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true">
                                <span style="background-color: #4867BC;" class="border-0 page-link text-light">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page">
                                        <span style="background-color: #4867BC;" class="border-0 page-link text-light">{{ $page }}</span></li>
                                @else
                                    <li class="page-item">
                                        <a style="background-color: #4867BC;" class="border-0 page-link text-light" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a style="background-color: #4867BC;" class="border-0 page-link text-light" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span style="background-color: #4867BC;" class="border-0 page-link text-light" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
    </nav>
@endif
