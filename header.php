<!DOCTYPE html>
<html class="no-js">
<head>
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="icon" href="http://www.swedishfika.com/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.swedishfika.com/favicon.ico" type="image/x-icon" />

    <!--[if lt IE 9]>
        <?php wp_print_scripts(array('swedishfika-html5shiv')); ?>
    <![endif]-->
    <?php wp_head();?>
</head>

<?php
$title = wp_title('', false);
$title = trim($title);
if($title == "")
{
    echo '<body class="home">';
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
    <header class="fika-logo" role="banner">
        <h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/swedish-fika-logo.png" alt="<?php bloginfo('name');?>">
        </h1>
    </header>
    <nav>
        <ul>
            <li class="nav_home"><a href="<?php echo home_url(); ?>/" >Home</a></li>
            <li class="nav_about"><a href="<?php echo home_url(); ?>/about" >About</a></li>
            <li class="nav_archive"><a href="<?php echo home_url(); ?>/archives" >Archives</a></li>
            <li class="nav_contact"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
        </ul>
    </nav>