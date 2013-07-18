<?php get_header(); ?>
	   	<main id="main" role="main">
			<h1><?php post_type_archive_title(); ?></h1>
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    <article id="post-<?php the_ID(); ?>" role="article">
			    <header class="article-header">
				    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				    <p class="byline vcard"><?php _e("Posted", "swedishfikatheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "swedishfikatheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span>.</p>
			    </header> <!-- end article header -->
			    <section class="entry-content">
				    <?php the_excerpt(); ?>
			    </section> <!-- end article section -->
		    </article> <!-- end article -->
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
    				    <p><?php _e("This is the error message in the custom posty type archive template.", "swedishfikatheme"); ?></p>
	    			</footer>
		    	</article>
		    <?php endif; ?>
		</main> 
	<?php get_sidebar(); ?>
<?php get_footer(); ?>