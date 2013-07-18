<?php get_header(); ?>
	<main id="main" role="main">
		<h1 class="archive-title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<article id="post-<?php the_ID(); ?>" role="article">
				<header class="article-header">
						<h2 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p class="byline vcard"><?php _e("Posted", "swedishfikatheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "swedishfikatheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e("filed under", "swedishfikatheme"); ?> <?php the_category(', '); ?>.</p>
					</header> 
					<section class="entry-content">
						<?php the_excerpt('<span class="read-more">Read more</span>'); ?>
					</section>
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
				<h1><?php _e("Sorry, No Results.", "swedishfikatheme"); ?></h1>
				<p><?php _e("Try your search again.", "swedishfikatheme"); ?></p>
				<footer class="article-footer">
					<p><?php _e("This is the error message in the search.php template.", "swedishfikatheme"); ?></p>
				</footer>
			</article>
		<?php endif; ?>
	</main> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>