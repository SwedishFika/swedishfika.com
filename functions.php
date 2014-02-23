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
/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
?>