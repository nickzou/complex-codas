@extends("base.base")

@section("content")
    <article class="mx-auto max-w-4xl px-4 py-8">
        {{-- Featured Image --}}
        @if (! empty($post["featuredImage"]))
            <div class="mb-8 overflow-hidden rounded-lg">
                <img
                    src="{{ $post["featuredImage"] }}"
                    alt="{{ $post["title"] }}"
                    class="h-auto w-full object-cover"
                />
            </div>
        @endif

        {{-- Post Header --}}
        <header class="mb-8">
            <h1 class="mb-4 text-4xl leading-tight font-bold text-gray-900 lg:text-5xl">
                {{ $post["title"] }}
            </h1>

            <div class="flex items-center gap-4 text-sm text-gray-600">
                <time datetime="{{ $post["date"] }}">{{ $post["date"] }}</time>
                <span class="text-gray-400">•</span>
                <a href="{{ $post["author"]["url"] }}" class="transition-colors hover:text-blue-600">
                    {{ $post["author"]["name"] }}
                </a>
            </div>
        </header>

        {{-- Post Content --}}
        <div class="prose prose-lg max-w-none">
            {!! $post["content"] !!}
        </div>
    </article>
@endsection
