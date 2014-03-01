<?php
get_header();
?>
<main role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php if ($wp_query->current_post == 0 && !is_paged() ) : ?>
            <article class="featured-post" role="article" itemscope itemtype="http://schema.org/Article">
                <a href="<?php the_permalink() ?>" rel="bookmark" class="big-image-link">
                <?php if (get_post_custom_values("big")) : ?>
                        <header class="weighty-post-header">
                            <h2><?php the_title(); ?></h2>
                            <img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
                        </header>
                <?php else: ?>
                        <header class="weighty-post-header">
                            <h2><?php the_title(); ?></h2>
                            <?php the_post_thumbnail(); ?>
                        </header>
                <?php endif; ?>
                    <time class="pub-date" pubdate itemprop="datePublished">
                        <?php the_date(); ?>
                    </time>
                </a>
            </article>
        <?php else: ?>
            <article class="main-entry">
                <?php if (get_post_custom_values("big")) : ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark" class="big-image-link">
                    <img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
                    </a>
                <?php else: ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark" class="big-image-link">
                        <?php the_post_thumbnail('list-thumb', array('class' => 'big-image')); ?>
                    </a>
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
        <? endif; ?>
        <?php endwhile; ?>
        <?php if (show_posts_nav()) : ?>
        <div class="navigation">
            <div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>
        <?php endif; ?>
    <?php   else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</main>
 <?php get_footer(); ?>