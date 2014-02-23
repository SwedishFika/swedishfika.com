<?php
get_header();
?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="main-entry" class="page">
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="article-text">
				<?php the_content(__('Continue reading...')); ?>
			</div>
		</div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</main>
 <?php get_footer(); ?>