@extends("base.base")

@section("content")
    <main class="mx-auto max-w-4xl px-4 py-8">
        <h1 class="mb-8 text-4xl font-bold">Recent Posts</h1>

        <div class="space-y-6">
            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">
                        The Art of Modern Web Development
                    </a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">November 5, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    Discover the latest trends and best practices in modern web development. From responsive design to
                    performance optimization, learn how to build websites that stand out in today's digital landscape.
                </p>
            </article>

            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">
                        Understanding Design Systems
                    </a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">November 2, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    A comprehensive guide to creating and maintaining design systems that scale. Explore the principles
                    of consistency, reusability, and how to build component libraries that empower your team.
                </p>
            </article>

            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">
                        Performance Optimization Strategies
                    </a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">October 28, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    Speed matters more than ever. Learn practical techniques to optimize your website's performance,
                    from lazy loading images to minimizing JavaScript bundles and improving core web vitals.
                </p>
            </article>

            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">
                        Accessibility Best Practices
                    </a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">October 25, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    Making the web accessible to everyone isn't just good practice—it's essential. Dive into WCAG
                    guidelines, semantic HTML, and testing tools that ensure your site works for all users.
                </p>
            </article>

            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">The Future of CSS</a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">October 20, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    Container queries, cascade layers, and advanced selectors are changing how we write CSS. Explore the
                    cutting-edge features that are reshaping the way we approach styling on the web.
                </p>
            </article>

            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">
                        JavaScript Frameworks Comparison
                    </a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">October 15, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    React, Vue, Svelte, or something else? Compare the most popular JavaScript frameworks and find the
                    right tool for your next project. We break down the pros, cons, and ideal use cases.
                </p>
            </article>

            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">Building Scalable APIs</a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">October 10, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    Learn the fundamentals of designing and building APIs that can grow with your application. From
                    RESTful design patterns to GraphQL and beyond, discover best practices for modern API development.
                </p>
            </article>

            <article class="border-b border-gray-200 pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">
                        Database Design Principles
                    </a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">October 5, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    A solid database structure is the foundation of any great application. Explore normalization,
                    indexing strategies, and how to design schemas that perform well at scale.
                </p>
            </article>

            <article class="pb-6">
                <h2 class="mb-2 text-2xl font-semibold">
                    <a href="#" class="text-gray-900 transition-colors hover:text-blue-600">
                        Deploying with Confidence
                    </a>
                </h2>
                <time class="mb-3 block text-sm text-gray-500">September 30, 2025</time>
                <p class="leading-relaxed text-gray-700">
                    Master the art of deployment with CI/CD pipelines, automated testing, and monitoring. Learn how to
                    ship code safely and frequently without breaking production.
                </p>
            </article>
        </div>
    </main>
@endsection
