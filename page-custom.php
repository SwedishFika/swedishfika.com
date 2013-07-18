<?php
/*
Template Name: Custom Page Example
*/
?>
<?php get_header(); ?>
	    <main id="main" role="main">
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			    <header class="article-header">
				    <h1 class="page-title"><?php the_title(); ?></h1>
				    <p class="byline vcard"><?php _e("Posted", "swedishfikatheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "swedishfikatheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span>.</p>
			    </header> <!-- end article header -->
			    <section class="entry-content">
				    <?php the_content(); ?>
			    </section> <!-- end article section -->
			    <footer class="article-footer">
				    <p><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
			    </footer> <!-- end article footer -->
			    <?php comments_template(); ?>
		    </article> <!-- end article -->
		    <?php endwhile; ?>	
		    <?php else : ?>
				<article id="post-not-found">
					 <h1><?php _e("Oops, Post Not Found!", "swedishfikatheme"); ?></h1>
					 <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "swedishfikatheme"); ?></p>
					<footer class="article-footer">
					    <p><?php _e("This is the error message in the page-custom.php template.", "swedishfikatheme"); ?></p>
					</footer>
				</article>
		    <?php endif; ?>
	    </main> <!-- end #main -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>