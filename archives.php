<?php
/*
Template Name: Archives
*/
?>
<?php
get_header();
?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-entry page">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<div class='main-content'>
				<?php the_content(__('Continue reading...')); ?>
			</div>
			
		</div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
<main>
 <?php get_footer(); ?>