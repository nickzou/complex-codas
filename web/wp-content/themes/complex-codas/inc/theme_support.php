<?php

// Enable featured images (post thumbnails)
add_theme_support("post-thumbnails");

// Set default thumbnail size
set_post_thumbnail_size(1200, 630, true);

// Add custom image sizes
add_image_size("post-preview", 800, 420, true);
add_image_size("post-thumbnail-large", 1600, 900, true);
