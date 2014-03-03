<?php
get_header();
?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="weighty-post-header">
                <?php if (get_post_custom_values("big")) : ?>
                    <img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
                <?php else: ?>
                    <?php the_post_thumbnail(); ?>
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