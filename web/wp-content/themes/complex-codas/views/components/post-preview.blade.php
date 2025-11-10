<article
    class="group overflow-hidden rounded-lg shadow-md transition-all duration-200 hover:-translate-y-1 hover:shadow-xl"
>
    <a href="{{ $permalink }}" class="block !no-underline">
        @if (! empty($featuredImage))
            <div class="relative h-64 overflow-hidden bg-gradient-to-br from-midnight-800 to-midnight-900">
                <img
                    src="{{ $featuredImage }}"
                    alt="{{ $title }}"
                    class="h-full w-full object-cover transition-transform duration-200 group-hover:scale-105"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent transition-opacity duration-200 group-hover:from-black/80"
                ></div>

                <div class="absolute right-0 bottom-0 left-0 p-2.5 text-white lg:p-6">
                    @include(
                        "components.post-preview.header",
                        [
                            "title" => $title,
                            "date" => $date,
                            "titleClasses" => "tracking-wide text-white group-hover:text-midnight-400 lg:mb-2",
                            "dateClasses" => "text-midnight-200 group-hover:text-white",
                        ]
                    )
                </div>
            </div>
        @endif

        <div class="bg-white p-6 transition-colors duration-200 group-hover:bg-midnight-100">
            @if (empty($featuredImage))
                @include(
                    "components.post-preview.header",
                    [
                        "title" => $title,
                        "date" => $date,
                        "titleClasses" => null,
                        "dateClasses" => null,
                    ]
                )
            @endif

            <p class="text-sm leading-relaxed text-gray-700 lg:text-base">
                {{ $excerpt }}
            </p>
        </div>
    </a>
</article>
