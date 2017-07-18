<?php
// Add Shortcode
function insert_gallery($attr)
{
    ob_start();
    get_template_part('partials/_postSlider');
    return ob_get_clean();
}
add_shortcode('post_gallery', 'insert_gallery');
