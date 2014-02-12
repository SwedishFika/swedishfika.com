<?php
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