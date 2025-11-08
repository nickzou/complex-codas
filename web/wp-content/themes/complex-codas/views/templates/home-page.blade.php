@extends("base.base")

@section("content")
    <main class="mx-auto max-w-4xl px-4 py-8">
        <h1 class="mb-8 text-4xl font-bold">Recent Posts</h1>

        <div class="space-y-6">
            @include(
                "components.post-preview",
                [
                    "title" => "The Art of Modern Web Development",
                    "date" => "November 5, 2025",
                    "excerpt" =>
                        'Discover the latest trends and best practices in modern web development. From responsive design to performance optimization, learn how to build websites that stand out in today\'s digital landscape.',
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "Understanding Design Systems",
                    "date" => "November 2, 2025",
                    "excerpt" =>
                        "A comprehensive guide to creating and maintaining design systems that scale. Explore the principles of consistency, reusability, and how to build component libraries that empower your team.",
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "Performance Optimization Strategies",
                    "date" => "October 28, 2025",
                    "excerpt" =>
                        'Speed matters more than ever. Learn practical techniques to optimize your website\'s performance, from lazy loading images to minimizing JavaScript bundles and improving core web vitals.',
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "Accessibility Best Practices",
                    "date" => "October 25, 2025",
                    "excerpt" =>
                        'Making the web accessible to everyone isn\'t just good practice—it\'s essential. Dive into WCAG guidelines, semantic HTML, and testing tools that ensure your site works for all users.',
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "The Future of CSS",
                    "date" => "October 20, 2025",
                    "excerpt" =>
                        "Container queries, cascade layers, and advanced selectors are changing how we write CSS. Explore the cutting-edge features that are reshaping the way we approach styling on the web.",
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "JavaScript Frameworks Comparison",
                    "date" => "October 15, 2025",
                    "excerpt" =>
                        "React, Vue, Svelte, or something else? Compare the most popular JavaScript frameworks and find the right tool for your next project. We break down the pros, cons, and ideal use cases.",
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "Building Scalable APIs",
                    "date" => "October 10, 2025",
                    "excerpt" =>
                        "Learn the fundamentals of designing and building APIs that can grow with your application. From RESTful design patterns to GraphQL and beyond, discover best practices for modern API development.",
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "Database Design Principles",
                    "date" => "October 5, 2025",
                    "excerpt" =>
                        "A solid database structure is the foundation of any great application. Explore normalization, indexing strategies, and how to design schemas that perform well at scale.",
                ]
            )

            @include(
                "components.post-preview",
                [
                    "title" => "Deploying with Confidence",
                    "date" => "September 30, 2025",
                    "excerpt" =>
                        "Master the art of deployment with CI/CD pipelines, automated testing, and monitoring. Learn how to ship code safely and frequently without breaking production.",
                ]
            )
        </div>
    </main>
@endsection
