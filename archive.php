<?php get_header(); ?>
	<main id="main" role="main">
	    <?php if (is_category()) { ?>
		    <h1>
			    <span><?php _e("Posts Categorized:", "swedishfikatheme"); ?></span> <?php single_cat_title(); ?>
	    	</h1>
	    <?php } elseif (is_tag()) { ?> 
		    <h1>
			    <span><?php _e("Posts Tagged:", "swedishfikatheme"); ?></span> <?php single_tag_title(); ?>
		    </h1>
	    <?php } elseif (is_author()) { 
	    	global $post;
	    	$author_id = $post->post_author;
	    ?>
		    <h1>
		    	<span><?php _e("Posts By:", "swedishfikatheme"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>
		    </h1>
	    <?php } elseif (is_day()) { ?>
		    <h1>
				<span><?php _e("Daily Archives:", "swedishfikatheme"); ?></span> <?php the_time('l, F j, Y'); ?>
		    </h1>

		<?php } elseif (is_month()) { ?>
		    <h1>
    	    	<span><?php _e("Monthly Archives:", "swedishfikatheme"); ?></span> <?php the_time('F Y'); ?>
	        </h1>
	
	    <?php } elseif (is_year()) { ?>
	        <h1>
	    	    <span><?php _e("Yearly Archives:", "swedishfikatheme"); ?></span> <?php the_time('Y'); ?>
	        </h1>
	    <?php } ?>
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <article id="post-<?php the_ID(); ?>" role="article">
		    <header class="article-header">
			    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			    <p class="byline vcard"><?php _e("Posted", "swedishfikatheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "swedishfikatheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e("filed under", "swedishfikatheme"); ?> <?php the_category(', '); ?>.</p>
		    </header> <!-- end article header -->
		    <section class="entry-content">
			    <?php the_post_thumbnail( 'swedishfika-thumb-300' ); ?>
			    <?php the_excerpt(); ?>
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
			    <header class="article-header">
				    <h1><?php _e("Oops, Post Not Found!", "swedishfikatheme"); ?></h1>
		    	</header>
			    <section class="entry-content">
				    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "swedishfikatheme"); ?></p>
				</section>
				<footer class="article-footer">
				    <p><?php _e("This is the error message in the archive.php template.", "swedishfikatheme"); ?></p>
    			</footer>
	    	</article>
	    <?php endif; ?>
	</main> 
	<?php get_sidebar(); ?>
<?php get_footer(); ?>