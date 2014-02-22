<?php
get_header();
?>
<div id="content-container">
	<div id="first-column">
	
	<?php //if (is_front_page()) {query_posts('showposts=3');}?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-entry">
			<a href="<?php the_permalink() ?>" rel="bookmark" class="big-image-link">
			<img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
			</a>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="datebox">
				<div class="date"><?php the_date(); ?></div>
				<!--<div class="month">DEC</div>-->
			</div>
			<div class='main-content'>
				<?php the_content(__('Continue reading...')); ?>
			</div>
		</div>
    <?php endwhile; ?>
		<?php if (show_posts_nav()) : ?>
		<div class="navigation">
			<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		<?php endif; ?>
	<?php	else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
	
	</div>
	<div id="second-column">
		<h4>Sections</h4>
		<ul id="sections">
			<?php wp_list_categories('title_li='); ?> 
		</ul>
    
		<?php if (function_exists('recent_posts')) { ?>
		<h4>Recent Entries</h4>
			<?php recent_posts(); ?>
		<?php } ?>    
        
		<?php if (function_exists('get_recent_comments')) { ?>
		<h4><?php _e('Recent Comments'); ?></h4>
		    <dl id="recent-comments">
				<?php get_recent_comments(); ?>
		    </dl>
		 <?php } ?> 


	</div>
	<div id="third-column">
		<h4>About</h4>
		<p>
			Swedish fika is a site where we can express our ideas and thoughts 
			about web design and development.
		</p>
		<h3>Subscribe</h3>
		<p>
			You can subscribe to our <a href="/feed">RSS feed</a> as well as our <a href="/feed/atom">Atom feed</a>.
		</p>
		<h4>Recommended Books</h4>
		<?php include('recommended_books.php'); ?>
		
		<?php 
			// Not so dynamic yet =)
			dynamic_sidebar() 
		?>
	  
	</div>
 <?php get_footer(); ?>