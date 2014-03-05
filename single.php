<?php
get_header();
?>
<main role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="single" role="article" itemscope itemtype="http://schema.org/Article">
            <header class="weighty-post-header">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail(); ?>
                    <? else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fika.jpg" alt=""  />
                    <?php endif; ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <h2><?php the_title(); ?></h2>
                        <time class="pub-date" pubdate itemprop="datePublished">
                            <?php the_date(); ?>
                        </time>
                    </a>
            </header>
            <div class="main-content" itemprop="articleBody">
                <?php
                $content = explode('<!--more-->', $post->post_content);
                if( !empty($content[1]) ) :
                ?>
                <div class="preamble">
                <?php echo apply_filters('the_content', $content[0]); ?>
                </div>
                <?php echo apply_filters('the_content', $content[1]); ?>
                <?php else : ?>
                <?php the_content(); ?>
                <?php endif; ?>
            </div>
		</article>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
    <?php comments_template() ?>
</main>
 <?php get_footer(); ?>