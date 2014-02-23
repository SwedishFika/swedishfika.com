<?php
get_header();
?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-entry page">
			<img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
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
    
    <?php comments_template() ?>
</main>
 <?php get_footer(); ?>