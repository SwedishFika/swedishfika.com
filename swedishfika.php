<?php
/* Welcome to swedishfika :)
This is the core swedishfika file where most of the
main functions & features reside. If you have
any custom functions, it's best to put them
in the functions.php file.

*/

/*********************
LAUNCH swedishfika
Let's fire off all the functions
and tools. I put it up here so it's
right up top and clean.
*********************/

// we're firing all out initial functions at the start
add_action('after_setup_theme','swedishfika_ahoy', 15);

function swedishfika_ahoy() {

    // enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'swedishfika_scripts_and_styles', 999);

} /* end swedishfika ahoy */



/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function swedishfika_scripts_and_styles() {
  if (!is_admin()) {

    // html5shiv from https://github.com/aFarkas/html5shiv
    wp_register_script( 'swedishfika-html5shiv', get_stylesheet_directory_uri() . '/assets/js/libs/html5shiv.min.js', array(), '3.7.0', false );

  }
}

?>
