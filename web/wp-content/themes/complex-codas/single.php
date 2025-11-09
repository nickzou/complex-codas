<?php
/**
 * Single post template
 */

if (have_posts()) {
    while (have_posts()) {
        the_post();

        $post_data = [
            "title" => get_the_title(),
            "date" => get_the_date("F j, Y"),
            "content" => get_the_content(),
            "featuredImage" => get_the_post_thumbnail_url(get_the_ID(), "full"),
            "author" => [
                "name" => get_the_author(),
                "url" => get_author_posts_url(get_the_author_meta("ID")),
            ],
        ];

        view("single", ["post" => $post_data]);
    }
}
?>
