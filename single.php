<?php get_header(); ?>
	<main id="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				<header class="article-header">
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					<p class="byline vcard"><?php _e("Posted", "swedishfikatheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "swedishfikatheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&amp;</span> <?php _e("filed under", "swedishfikatheme"); ?> <?php the_category(', '); ?>.</p>
				</header>
				<div itemprop="articleBody">
					<?php the_content(); ?>
				</div>
				<footer class="article-footer">
					<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
				</footer>
				<?php comments_template(); ?>
			</article> 
		<?php endwhile; ?>			
		<?php else : ?>
			<article id="post-not-found" class="hentry clearfix">
	    		<header class="article-header">
	    			<h1><?php _e("Oops, Post Not Found!", "swedishfikatheme"); ?></h1>
	    		</header>
	    		<section class="entry-content">
	    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "swedishfikatheme"); ?></p>
	    		</section>
	    		<footer class="article-footer">
	    		    <p><?php _e("This is the error message in the single.php template.", "swedishfikatheme"); ?></p>
	    		</footer>
			</article>
		<?php endif; ?>		
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>