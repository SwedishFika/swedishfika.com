<?php get_header(); ?>
			
	    <main role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
			    <header class="article-header">
				
				    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				
				    <p class="byline vcard"><?php _e('Posted', 'swedishfikatheme'); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <?php _e('by', 'swedishfikatheme'); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e('filed under', 'swedishfikatheme'); ?> <?php the_category(', '); ?>.</p>
			
			    </header> <!-- end article header -->
		
			    <section class="entry-content clearfix">
				    <?php the_content(); ?>
			    </section> <!-- end article section -->
			
			    <footer class="article-footer">

					<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

			    </footer> <!-- end article footer -->
			    
			    <?php // comments_template(); // uncomment if you want to use them ?>
		
		    </article> <!-- end article -->
		
		    <?php endwhile; ?>	
		
		        <?php if (function_exists('swedishfika_page_navi')) { ?>
		            <?php swedishfika_page_navi(); ?>
		        <?php } else { ?>
		            <nav class="wp-prev-next">
		                <ul class="clearfix">
		        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "swedishfikatheme")) ?></li>
		        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "swedishfikatheme")) ?></li>
		                </ul>
		            </nav>
		        <?php } ?>		
		
		    <?php else : ?>
		    
		        <article id="post-not-found" class="hentry clearfix">
		            <header class="article-header">
		        	    <h1><?php _e("Oops, Post Not Found!", "swedishfikatheme"); ?></h1>
		        	</header>
		            <section class="entry-content">
		        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "swedishfikatheme"); ?></p>
		        	</section>
		        	<footer class="article-footer">
		        	    <p><?php _e("This is the error message in the index.php template.", "swedishfikatheme"); ?></p>
		        	</footer>
		        </article>
		
		    <?php endif; ?>

	    </main> <!-- end main -->

	    <?php get_sidebar(); ?>

<?php get_footer(); ?>
