<h2 id="comments">
	<?php comments_number(__('Nenhum Comentário'), __('1 Comentário:'), __('% Comentários:')); ?>
</h2>

<hr/>

<?php if ( $comments ) : ?>
	<ol id="commentlist">

		<?php foreach ($comments as $comment) : ?>
			<li id="comment-<?php comment_ID() ?>">
				<div class="comment_text"><?php comment_text() ?></div>
				<div class="avatar"><?php echo get_avatar( $comment, 76 ); ?></div>  
				<small>
					<p class="titleMeta"><?php comment_author_link() ?></p>
					<p><?php echo strtoupper(get_comment_date('j M, Y')) ?> </p>
					<p>at <?php echo strtoupper(get_comment_time()) ?></p>
					<?php edit_comment_link(__("Edit")); ?>
				</small>
			</li>
			<hr/>
		<?php endforeach; ?>
	</ol>

<?php else : ?>
	<p><?php _e('No comments yet.'); ?></p>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
	<h2 id="postcomment">Comente:</h2>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>

	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>

				<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>"><?php _e('Logout &raquo;'); ?></a></p>
		
				<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="1"></textarea>
			<?php else : ?>
				<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="1"></textarea>
				<div class="field_comment">
				<p><label for="author"><small>*Nome:</small></label></p>
				<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="2" /></p>
				<p><label for="email"><small>*E-mail:</small></label></p>
				<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="3" /></p>
				<p><label for="url"><small>Website:</small></label></p>
				<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="4" /></p>
				</div>
			<?php endif; ?>

			<!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->


			<p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="enviar"/>
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>

			<?php do_action('comment_form', $post->ID); ?>
		</form>

	<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
	<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>