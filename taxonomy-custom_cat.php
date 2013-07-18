<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>
	<main id="main" role="main">			
		<h1><span><?php _e("Posts Categorized:", "swedishfikatheme"); ?></span> <?php single_cat_title(); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">			
				<header class="article-header">
				    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				    <p class="byline vcard"><?php _e("Posted", "swedishfikatheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "swedishfikatheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e("filed under", "swedishfikatheme"); ?> <?php echo get_the_term_list( get_the_ID(), 'custom_cat', "" ) ?>.</p>
			    </header>
				    <?php the_excerpt('<span class="read-more">Read More</span>'); ?>
		    </article>
		    <?php endwhile; ?>	
		        <?php if (function_exists('swedishfika_page_navi')) { ?>
		            <?php swedishfika_page_navi(); ?>
		        <?php } else { ?>
		            <nav class="wp-prev-next">
		                <ul>
		        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "swedishfikatheme")) ?></li>
		        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "swedishfikatheme")) ?></li>
		                </ul>
		            </nav>
		        <?php } ?>
		    <?php else : ?>
				<article id="post-not-found">
					<h1><?php _e("Oops, Post Not Found!", "swedishfikatheme"); ?></h1>
					<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "swedishfikatheme"); ?></p>
					<footer class="article-footer">
					 <p><?php _e("This is the error message in the taxonomy-custom_cat.php template.", "swedishfikatheme"); ?></p>
					</footer>
				</article>			
		<?php endif; ?>		
	</main>    
<?php get_sidebar(); ?>
<?php get_footer(); ?>