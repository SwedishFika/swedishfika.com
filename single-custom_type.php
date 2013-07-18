<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>			
	<main id="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" role="article">
				<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>			
				<p class="byline vcard"><?php _e("Posted", "swedishfikatheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "swedishfikatheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e("filed under", "swedishfikatheme"); ?> <?php echo get_the_term_list( get_the_ID(), 'custom_cat', "" ) ?>.</p>
				<?php the_content(); ?>
				<footer class="article-header">
					<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">Custom Tags:</span> ', ', ' ) ?></p>
				</footer>
				<?php comments_template(); ?>
			</article> <!-- end article -->
			<?php endwhile; ?>			
		<?php else : ?>
				<article id="post-not-found">
					<h1><?php _e("Oops, Post Not Found!", "swedishfikatheme"); ?></h1>
					<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "swedishfikatheme"); ?></p>
					<footer class="article-footer">
					    <p><?php _e("This is the error message in the single-custom_type.php template.", "swedishfikatheme"); ?></p>
					</footer>
				</article>			
			<?php endif; ?>
		</main>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>