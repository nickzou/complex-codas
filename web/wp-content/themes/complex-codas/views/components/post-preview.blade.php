<article
    class="group overflow-hidden rounded-lg shadow-md transition-all duration-200 hover:-translate-y-1 hover:shadow-xl"
>
    <a href="{{ $permalink }}" class="block !no-underline">
        <div class="relative h-64 overflow-hidden bg-gradient-to-br from-gray-800 to-gray-900">
            @if (! empty($featuredImage))
                <img
                    src="{{ $featuredImage }}"
                    alt="{{ $title }}"
                    class="h-full w-full object-cover transition-transform duration-200 group-hover:scale-105"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent transition-opacity duration-200 group-hover:from-black/80"
                ></div>
            @endif

            <div class="absolute right-0 bottom-0 left-0 p-2.5 text-white lg:p-6">
                <h2
                    class="text-2xl leading-tight font-bold tracking-wide transition-colors duration-200 group-hover:text-blue-300 lg:mb-2"
                >
                    {{ $title }}
                </h2>
                <time class="text-sm text-gray-200 transition-colors duration-200 group-hover:text-gray-100">
                    {{ $date }}
                </time>
            </div>
        </div>

        <div class="bg-white p-6 transition-colors duration-200 group-hover:bg-gray-50">
            <p class="text-sm leading-relaxed text-gray-700 lg:text-base">
                {{ $excerpt }}
            </p>
        </div>
    </a>
</article>
