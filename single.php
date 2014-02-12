<?php
get_header();
?>
<div id="content-container">
	<div id="first-column">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-entry page">
			<img src="<?php $value = get_post_custom_values("big"); echo $value[0];  ?>" class="big-image" alt=""  />
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="datebox">
				<div class="date"><?php the_date(); ?></div>
				<!--<div class="month">DEC</div>-->
			</div>
			<div class='main-content'>
				<?php the_content(__('Continue reading...')); ?>
			</div>
		</div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
    <?php comments_template() ?>
	
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
		<h4>Subscribe</h4>
		<p>
			You can subscribe to our <a href="/feed">RSS feed</a> as well as our <a href="/feed/atom">Atom feed</a>.
		</p>
		<h4>Recommended Books</h4>
		<?php include('recommended_books.php'); ?>
		
		<?php 
			// Not so dynamic yet =)
			dynamic_sidebar() 
		?>
		
		<h4>Our Latest Bookmarks</h4>
      <?php delicious_bookmarks("swedishfika", 5, true, false, false,'',true); ?>
	</div>
 <?php get_footer(); ?>