<header class="mb-8">
    @if (! empty($featuredImage))
        {{-- Featured Image with Overlay --}}
        <div class="relative mb-8 aspect-square w-full overflow-hidden rounded-lg lg:aspect-[16/7]">
            <img src="{{ $featuredImage }}" alt="{{ $title }}" class="h-auto w-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

            <div class="absolute right-0 bottom-0 left-0 px-4 py-6 text-white lg:p-8">
                @include("components.single-header.title", ["title" => $title])

                <div class="flex items-center gap-4 text-sm text-gray-200">
                    <time datetime="{{ $date }}">{{ $date }}</time>
                    @if (! empty($author))
                        <span class="text-gray-400">•</span>
                        <a href="{{ $author["url"] }}" class="transition-colors hover:text-blue-300">
                            {{ $author["name"] }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    @else
        {{-- No Featured Image --}}
        @include("components.single-header.title", ["title" => $title, "titleClasses" => "text-gray-900"])

        <div class="flex items-center gap-4 text-sm text-gray-600">
            <time datetime="{{ $date }}">{{ $date }}</time>
            @if (! empty($author))
                <span class="text-gray-400">•</span>
                <a href="{{ $author["url"] }}" class="transition-colors hover:text-blue-600">
                    {{ $author["name"] }}
                </a>
            @endif
        </div>
    @endif
</header>
