<?php
/*
Template Name: Archives
*/
?>
<?php
get_header();
?>
<main class="page" role="main">
    <article role="article" itemscope itemtype="http://schema.org/Article">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="weighty-post-header">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fika.jpg" alt=""  />
                <?php endif; ?>
                <h1><?php the_title(); ?></h1>
        </header>
        <div class='main-content'>
            <?php the_content(); ?>
        </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    </article>
<main>
 <?php get_footer(); ?>