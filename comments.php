<?php if ( $comments ) : ?>
<div class="comments">
	<div class="section">
		<h2>Comments</h2>
	</div>
	
	<div id="read-comments" class="comments-wrapper">
		
	<?php foreach ($comments as $comment) : ?>
	<?php if ( $comment->user_id == get_the_author_ID() ) : ?>
		<div class="comment-wrapper admin-comment" id="comment-<?php comment_ID() ?>">
	<?php else : ?>
		<div class="comment-wrapper" id="comment-<?php comment_ID() ?>">
	<?php endif; ?>	
			<div class="comments-info">
				<div class="comment-meta">
					<?php do_action('gravatar', array('size' => 40,'default' => 'http://swedishfika.com/wp-content/themes/swedishfika/blank.png')) ?>
				</div>
				<div class="message">
					<div class="comment-author">
						<span><?php comment_author_link() ?></span>
						<span class="comment-date"><?php comment_date() ?></span>
					</div>
					<div class="comment-post">
						<?php comment_text() ?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
			
	</div>

</div>

<?php endif; ?>

<div class="add-comment">
	<div id="comment-form">
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
			<fieldset>
				<div class="formfield-message">
					<label for="comment">Add your comments</label>
					<div style=""><textarea id="comment" name="comment" rows="10" cols="59"></textarea><br/><span class="desc">Be nice! Spam and irrelevant comments will be deleted.</span></div>
				</div>
				<div id="author-info">
					<div class="formfield">
						<label for="author">Name </label><span class="desc"><?php if ($req) _e('(Required)'); ?></span>
						<input type="text" id="author" name="author" value="<?php echo $comment_author; ?>"/>
					</div>
					<div class="formfield">
						<label for="email">Email </label><span class="desc"><?php if ($req) _e('(Required)'); ?></span>
						<input type="text" id="email" name="email" value="<?php echo $comment_author_email; ?>"/>
					</div>
					<div class="formfield">
						<label for="url">Website</label>
						<input type="text" id="url" name="url" value="<?php echo $comment_author_url; ?>"/>
					</div>
				</div>
				<span class="desc">Don't worry we don't publish your email, we hate spam too!</span>
				<div class="formfield-submit">
					<input type="submit" name="submit" id="submit" value="Post comment" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					<?php do_action('comment_form', $post->ID); ?>
				</div>
			</fieldset>
		</form>
	</div>
</div>