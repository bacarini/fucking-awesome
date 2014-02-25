<h2 id="comments">
	<?php comments_number(__('Nenhum Comentário'), __('1 Comentário:'), __('% Comentários:')); ?>
</h2>

<hr/>

<?php if ( $comments ) : ?>
	<ol id="commentlist">

		<?php foreach ($comments as $comment) : ?>
			<li class="comment">
        <div class="comment_image">
          <?php echo get_avatar( $comment, 76 ); ?>
          <small>
          <p class="titleMeta"><?php comment_author_link() ?></p>
          <p><?php echo get_comment_date('j.m.Y') ?> </p>
          <p>at <?php echo strtoupper(get_comment_time()) ?></p>
          <?php edit_comment_link(__("Edit")); ?>
        </small>
        </div>
        <div class="comment_text"><?php comment_text() ?></div>
      </li>
      <hr/>
		<?php endforeach; ?>
	</ol>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
	<h2 id="postcomment">Comente:</h2>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>

	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>

				<p><?php printf(__('Logado como %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>"><?php _e('Sair'); ?></a></p>

        <div class="form-comment-area">
          <textarea name="comment" id="comment" cols="100" class="" required rows="10" tabindex="1"></textarea>
        </div>
			<?php else : ?>
        <div class="form-comment-area">
				  <textarea name="comment" id="comment" cols="100" class="" required rows="10" tabindex="1"></textarea>
        </div>
				<div class="field_comment">
          <label>
            <span class="label">Nome</span>
            <input type="text" name="author" id="author" required value="<?php echo $comment_author; ?>" tabindex="2" />
          </label>
          <label>
            <span class="label">*E-mail:</span>
            <input type="email" name="email" id="email" required class="email" value="<?php echo $comment_author_email; ?>" tabindex="3" />
          </label>
          <label>
            <span class="label">Website:</span>
            <input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="4" />
          </label>
				</div>
			<?php endif; ?>

			<p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="enviar"/>
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>

			<?php do_action('comment_form', $post->ID); ?>
		</form>

	<?php endif; ?>

<?php else :?>
	<p><?php _e('Sorry! Este post não aceita comentários.'); ?></p>
<?php endif; ?>
