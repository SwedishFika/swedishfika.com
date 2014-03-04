<?php
get_header();
?>
<div id="content-container" class="category">
	<div id="first-column">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-entry">
			<a href="<?php the_permalink() ?>" rel="bookmark" class="big-image-link">
			<img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
			</a>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="datebox">
				<div class="date"><?php the_date(); ?></div>
				<!--<div class="month">DEC</div>-->
			</div>
			<div class='main-content'>
				<?php the_content(__('Continue reading...')); ?>
			</div>
		</div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
	
	</div>
 <?php get_footer(); ?>