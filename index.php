<?php
get_header();
?>
<main>
	<?php //if (is_front_page()) {query_posts('showposts=3');}?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="main-entry">
			<?php if (get_post_custom_values("big")) : ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" class="big-image-link">
				<img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
				</a>
			<?php else: ?>
				<p>Putting in big image</p>
			<?php endif; ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<p class="pub-date"> 
				<time pubdate>
					<?php the_date(); ?>
				</time>
			</p>
			<div class='main-content'>
				<?php the_content(__('Continue reading...')); ?>
			</div>
		</article>
    <?php endwhile; ?>
		<?php if (show_posts_nav()) : ?>
		<div class="navigation">
			<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		<?php endif; ?>
	<?php	else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</main>
 <?php get_footer(); ?>