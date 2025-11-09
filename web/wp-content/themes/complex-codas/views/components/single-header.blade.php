<header class="mb-8">
    {{-- Featured Image --}}
    @if (! empty($featuredImage))
        <div class="mb-8 overflow-hidden rounded-lg">
            <img src="{{ $featuredImage }}" alt="{{ $title }}" class="h-auto w-full object-cover" />
        </div>
    @endif

    <h1 class="mb-4 text-4xl leading-tight font-bold text-gray-900 lg:text-5xl">
        {{ $title }}
    </h1>

    <div class="flex items-center gap-4 text-sm text-gray-600">
        <time datetime="{{ $date }}">{{ $date }}</time>
        @if (! empty($author))
            <span class="text-gray-400">•</span>
            <a href="{{ $author["url"] }}" class="transition-colors hover:text-blue-600">
                {{ $author["name"] }}
            </a>
        @endif
    </div>
</header>
