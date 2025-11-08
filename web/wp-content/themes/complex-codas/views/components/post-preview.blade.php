<article class="border-b border-gray-200 pb-6">
    <h2 class="mb-2 text-2xl font-semibold">
        <a href="{{ $permalink }}" class="text-gray-900 transition-colors hover:text-blue-600">
            {{ $title }}
        </a>
    </h2>
    <time class="mb-3 block text-sm text-gray-500">{{ $date }}</time>
    <p class="leading-relaxed text-gray-700">
        {{ $excerpt }}
    </p>
</article>
