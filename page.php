<?php
get_header();
?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="weighty-post-header">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fika.jpg" alt=""  />
                <?php endif; ?>
                <h1><?php the_title(); ?></h1>
        </header>
        <div id="main-entry" class="page">
            <div class="article-text">
                <?php the_content(__('Continue reading...')); ?>
            </div>
        </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</main>
 <?php get_footer(); ?>