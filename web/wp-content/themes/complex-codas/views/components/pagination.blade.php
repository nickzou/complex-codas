@if ($totalPages > 1)
    <nav class="mt-6 flex justify-center" aria-label="Pagination">
        <ul class="flex items-center gap-2 rounded-lg border border-midnight-300 bg-midnight-100 p-2">
            {{-- Previous Button --}}
            @if ($currentPage > 1)
                <li>
                    <a
                        href="{{ get_pagenum_link($currentPage - 1) }}"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-midnight-300 bg-white text-midnight-600 transition-colors hover:bg-midnight-200 hover:text-midnight-700"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                </li>
            @endif

            {{-- Page Numbers --}}
            @for ($i = 1; $i <= $totalPages; $i++)
                @if ($i == 1 || $i == $totalPages || ($i >= $currentPage - 2 && $i <= $currentPage + 2))
                    <li>
                        @if ($i == $currentPage)
                            <span
                                class="flex h-10 items-center rounded-lg bg-midnight-600 px-4 text-sm font-bold text-white"
                                aria-current="page"
                            >
                                {{ $i }}
                            </span>
                        @else
                            <a
                                href="{{ get_pagenum_link($i) }}"
                                class="flex h-10 items-center rounded-lg bg-white px-4 text-sm font-medium text-midnight-600 !no-underline transition-colors hover:bg-midnight-200 hover:text-midnight-700"
                            >
                                {{ $i }}
                            </a>
                        @endif
                    </li>
                @elseif ($i == $currentPage - 3 || $i == $currentPage + 3)
                    <li>
                        <span class="flex h-10 items-center px-2 text-midnight-400">...</span>
                    </li>
                @endif
            @endfor

            {{-- Next Button --}}
            @if ($currentPage < $totalPages)
                <li>
                    <a
                        href="{{ get_pagenum_link($currentPage + 1) }}"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-midnight-300 bg-white text-midnight-600 transition-colors hover:bg-midnight-200 hover:text-midnight-700"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
