@extends("base.base")

@section("content")
    <article class="mx-auto max-w-4xl px-4 py-8">
        {{-- Post Header --}}
        @include(
            "components.single-header",
            [
                "title" => $post["title"],
                "date" => $post["date"],
                "author" => $post["author"],
                "featuredImage" => $post["featuredImage"],
            ]
        )

        {{-- Post Content --}}
        <div class="prose prose-lg max-w-none">
            {!! $post["content"] !!}
        </div>
    </article>
@endsection
