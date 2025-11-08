@extends("base.base")

@section("content")
    <main class="mx-auto max-w-4xl px-4 py-8">
        <h1 class="mb-8 text-4xl font-bold">Recent Posts</h1>

        @if (count($posts) > 0)
            <div class="space-y-6">
                @foreach ($posts as $post)
                    @include(
                        "components.post-preview",
                        [
                            "title" => $post["title"],
                            "date" => $post["date"],
                            "excerpt" => $post["excerpt"],
                            "permalink" => $post["permalink"],
                        ]
                    )
                @endforeach
            </div>
        @else
            <p class="text-gray-600">No posts found.</p>
        @endif
    </main>
@endsection
