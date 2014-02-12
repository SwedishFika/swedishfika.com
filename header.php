<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
  	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  	<meta name="author" content="Alexander Radsby &amp; Simon Kjellberg" />
  	<meta name="language" content="EN" /> 
  	<meta name="copyright" content="Copyright 2008" /> 
  	<meta name="rating" content="general" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="icon" href="http://www.swedishfika.com/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="http://www.swedishfika.com/favicon.ico" type="image/x-icon" />


 	<?php wp_head(); ?> 
</head>

<?php
$title = wp_title('', false);
$title = trim($title);
if($title == "")
{
	echo '<body class="home"><h1>Swedish fika</h1>';
}
else if($title == "About")
{
	echo '<body class="about">';
}
else if($title == "Archives")
{
	echo '<body class="archives">';
}
else if($title == "Contact")
{
	echo '<body class="contact">';
}
else
{
	echo '<body>';
}
?>

<div id="container">
	<div id="menu-container">
		<div id="logo"><?php bloginfo('name'); ?></div>
		<div id="menu">
			<ul>
				<li class="nav_home"><a href="/" >Home</a></li>
				<li class="nav_about"><a href="/about" >About</a></li>
				<li class="nav_archive"><a href="/archives" >Archives</a></li>
				<li class="nav_contact"><a href="/contact">Contact</a></li>
			</ul>
		</div>
		<div id="search">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
				<fieldset>
					<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></div>
					<input type="submit" id="searchsubmit" value="search" class="hidden" />
				</fieldset>
			</form>
		</div>
	</div>