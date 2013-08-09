<?php
/*
The comments page for swedishfika
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="alert help">
    	<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.", "swedishfikatheme"); ?></p>
  	</div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	
	<h3 id="comments" class="h2"><?php comments_number('<span>No</span> Responses', '<span>One</span> Response', '<span>%</span> Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
	<nav id="comment-nav">
		<ul>
	  		<li><?php previous_comments_link() ?></li>
	  		<li><?php next_comments_link() ?></li>
	 	</ul>
	</nav>
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=swedishfika_comments'); ?>
	</ol>
	<nav id="comment-nav">
		<ul>
	  		<li><?php previous_comments_link() ?></li>
	  		<li><?php next_comments_link() ?></li>
		</ul>
	</nav>
  
	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
    	<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
	
	<!-- If comments are closed. -->
	<!--p class="nocomments"><?php _e("Comments are closed.", "swedishfikatheme"); ?></p-->

	<?php endif; ?>

<?php endif; ?>
<?php if ( comments_open() ) : ?>
<fieldset id="respond" class="respond-form">
	<legend><?php comment_form_title( __('Leave a Reply', 'swedishfikatheme'), __('Leave a Reply to %s', 'swedishfikatheme' )); ?></legend>
	<div id="cancel-comment-reply">
		<p><?php cancel_comment_reply_link(); ?></p>
	</div>
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  	<p class="alert help"><?php printf( 'You must be %1$slogged in%2$s to post a comment.', '<a href="<?php echo wp_login_url( get_permalink() ); ?>">', '</a>' ); ?></p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ( is_user_logged_in() ) : ?>
	<p class="comments-logged-in-as"><?php _e("Logged in as", "swedishfikatheme"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account", "swedishfikatheme"); ?>"><?php _e("Log out", "swedishfikatheme"); ?> <?php _e("&raquo;", "swedishfikatheme"); ?></a></p>
	<?php else : ?>
	<ul id="comment-form-elements">
		<li>
		  <label for="author"><?php _e("Name", "swedishfikatheme"); ?> <?php if ($req) _e("(required)"); ?></label>
		  <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e('Your Name*', 'swedishfikatheme'); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		</li>
		<li>
		  <label for="email"><?php _e("Mail", "swedishfikatheme"); ?> <?php if ($req) _e("(required)"); ?></label>
		  <input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e('Your E-Mail*', 'swedishfikatheme'); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		  <small><?php _e("(will not be published)", "swedishfikatheme"); ?></small>
		</li>
		<li>
		  <label for="url"><?php _e("Website", "swedishfikatheme"); ?></label>
		  <input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e('Got a website?', 'swedishfikatheme'); ?>" tabindex="3" />
		</li>
	</ul>
	<?php endif; ?>
	<p><textarea name="comment" id="comment" placeholder="<?php _e('Your Comment here...', 'swedishfikatheme'); ?>" tabindex="4"></textarea></p>
	<p>
	  <input name="submit" type="submit" id="submit" class="button" tabindex="5" value="<?php _e('Submit', 'swedishfikatheme'); ?>" />
	  <?php comment_id_fields(); ?>
	</p>
	<div class="alert info">
		<p id="allowed_tags" class="small"><strong>HTML:</strong> <?php _e('You can use these tags', 'swedishfikatheme'); ?>: <code><?php echo allowed_tags(); ?></code></p>
	</div>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
</fieldset>
<?php endif; // if you delete this the sky will fall on your head ?>
