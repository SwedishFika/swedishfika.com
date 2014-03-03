<?php
get_header();
?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="single">
            <header class="weighty-post-header" role="article" itemscope itemtype="http://schema.org/Article">
                    <?php if (get_post_custom_values("big")) : ?>
                        using fallback
                    <?php else: ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <h2><?php the_title(); ?></h2>
                        <time class="pub-date" pubdate itemprop="datePublished">
                            <?php the_date(); ?>
                        </time>
                    </a>
            </header>
			<img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
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