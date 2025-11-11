<?php
/**
 * Main blog index template
 */

// Get current page number
$paged = get_query_var("paged") ? get_query_var("paged") : 1;

// Query posts
$args = [
    "post_type" => "post",
    "post_status" => "publish",
    "posts_per_page" => 10,
    "orderby" => "date",
    "order" => "DESC",
    "paged" => $paged,
];

$query = new WP_Query($args);
$posts = [];

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $posts[] = [
            "title" => get_the_title(),
            "date" => get_the_date("F j, Y"),
            "excerpt" => get_the_excerpt(),
            "permalink" => get_permalink(),
            "featuredImage" => get_the_post_thumbnail(get_the_ID(), "post-preview", [
                "class" => "h-full w-full object-cover transition-transform duration-200 group-hover:scale-105",
            ]),
        ];
    }
    wp_reset_postdata();
}

// Pagination data
$pagination = [
    "total_pages" => $query->max_num_pages,
    "current_page" => $paged,
];

view("index", ["posts" => $posts, "pagination" => $pagination]);
?>
