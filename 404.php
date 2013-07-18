<?php get_header(); ?>
	<main id="main" role="main">
		<article class="post-not-found">
			<header class="article-header">
				<h1><?php _e("Epic 404 - Article Not Found", "swedishfikatheme"); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e("The article you were looking for was not found, but maybe try looking again!", "swedishfikatheme"); ?></p>
			</section>
			<section class="search">
			    <p><?php get_search_form(); ?></p>
			</section> 
			<footer class="article-footer">
			    <p><?php _e("This is the 404.php template.", "swedishfikatheme"); ?></p>
			</footer> 
		</article> 
	</main> 
<?php get_footer(); ?>
