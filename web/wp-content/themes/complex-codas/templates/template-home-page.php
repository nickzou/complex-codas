<?php
/**
 * Template Name: Home Page
 * Description: Custom template for the home page
 */

// Query posts
$args = [
    "post_type" => "post",
    "post_status" => "publish",
    "posts_per_page" => 10,
    "orderby" => "date",
    "order" => "DESC",
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
            "featuredImage" => get_the_post_thumbnail_url(get_the_ID(), "post-preview"),
        ];
    }
    wp_reset_postdata();
}

view("templates.home-page", ["posts" => $posts]);
?>
