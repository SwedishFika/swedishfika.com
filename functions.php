<?php


/************* INCLUDE NEEDED FILES ***************/

/*
1. library/swedishfika.php
    - head cleanup (remove rsd, uri links, junk css, ect)
    - enqueueing scripts & styles
    - theme support functions
    - custom menu output & fallbacks
    - related post function
    - page-navi function
    - removing <p> from around images
    - customizing the post excerpt
    - custom google+ integration
    - adding custom fields to user profiles
*/
require_once('swedishfika.php'); // if you remove this, swedishfika will break

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( 'list-thumb', 376, 9999 ); //300 pixels wide (and unlimited height)
}

/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}

?>