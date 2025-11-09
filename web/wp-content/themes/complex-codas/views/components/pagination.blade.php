@if ($totalPages > 1)
    <nav class="mt-6 flex justify-center" aria-label="Pagination">
        <ul class="flex items-center gap-2 rounded-lg border border-gray-300 p-2">
            {{-- Previous Button --}}
            @if ($currentPage > 1)
                <li>
                    <a
                        href="{{ get_pagenum_link($currentPage - 1) }}"
                        class="flex h-10 items-center rounded-lg bg-white px-4 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-100 hover:text-blue-600"
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
                                class="flex h-10 items-center rounded-lg bg-blue-600 px-4 text-sm font-bold text-white"
                                aria-current="page"
                            >
                                {{ $i }}
                            </span>
                        @else
                            <a
                                href="{{ get_pagenum_link($i) }}"
                                class="flex h-10 items-center rounded-lg bg-white px-4 text-sm font-medium text-gray-700 !no-underline transition-colors hover:bg-gray-100 hover:text-blue-600"
                            >
                                {{ $i }}
                            </a>
                        @endif
                    </li>
                @elseif ($i == $currentPage - 3 || $i == $currentPage + 3)
                    <li>
                        <span class="flex h-10 items-center px-2 text-gray-500">...</span>
                    </li>
                @endif
            @endfor

            {{-- Next Button --}}
            @if ($currentPage < $totalPages)
                <li>
                    <a
                        href="{{ get_pagenum_link($currentPage + 1) }}"
                        class="flex h-10 items-center rounded-lg bg-white px-4 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-100 hover:text-blue-600"
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
