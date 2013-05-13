<?php
/* Welcome to swedishfika :)
Thanks to the fantastic work by swedishfika users, we've now
the ability to translate swedishfika into different languages.

Developed by: Eddie Machado
URL: http://themble.com/swedishfika/
*/



// Adding Translation Option
load_theme_textdomain( 'swedishfikatheme', get_template_directory() .'/library/translation' );
	$locale = get_locale();
	$locale_file = get_template_directory() ."/library/translation/$locale.php";
if ( is_readable($locale_file) ) require_once($locale_file);








?>