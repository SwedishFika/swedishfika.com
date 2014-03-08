<?php if ( $comments ) : ?>
<div class="comments">
		<h2>Comments</h2>
		
	<?php foreach ($comments as $comment) : ?>
	<?php if ( $comment->user_id == get_the_author_ID() ) : ?>
		<article class="comment admin-comment" id="comment-<?php comment_ID() ?>">
	<?php else : ?>
		<article class="comment" id="comment-<?php comment_ID() ?>">
	<?php endif; ?>	
			<?php do_action('gravatar', array('size' => 66,'default' => get_template_directory_uri()+'/assets/blank.png')) ?>
			<div class="message">
				<div class="comment-author">
					<span><?php comment_author_link() ?></span>
					<time class="comment-date"><?php comment_date() ?></time>
				</div>
				<div class="comment-post">
					<?php comment_text() ?>
				</div>
			</div>
		</article>
		<?php endforeach; ?>
</div>

<?php endif; ?>

<div class="add-comment">
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
			<fieldset>
				<legend>Leave a comment</legend>
				<div class="formfield-message">
					<p>
						Remember to be nice! Spam and irrelevant comments will be deleted.
						Also, we won’t post any e-mails so don’t worry. We hate spam too!
					</p>
					
				</div>
				<div id="author-info">
					<div class="formfield">
						<label for="author">Your name <span class="desc"><?php if ($req) _e('*'); ?></span></label>
						<input type="text" id="author" name="author" value="<?php echo $comment_author; ?>"/>
					</div>
					<div class="formfield">
						<label for="email">Your email <span class="desc"><?php if ($req) _e('*'); ?></span></label>
						<input type="text" id="email" name="email" value="<?php echo $comment_author_email; ?>"/>
					</div>
					<div class="formfield">
						<label for="url">Your website</label>
						<input type="text" id="url" name="url" value="<?php echo $comment_author_url; ?>"/>
					</div>
					<label for="comment">Your comment</label>
					<div style=""><textarea id="comment" name="comment" rows="10" cols="59"></textarea></div>
				</div>
				<div class="formfield-submit">
					<input type="submit" name="submit" id="submit" value="Post comment" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					<?php do_action('comment_form', $post->ID); ?>
				</div>
			</fieldset>
		</form>
</div>