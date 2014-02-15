<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>
    <div class="post_date">
      <span class="month">
        <?php the_time('M') ?>
      </span>
      <span class="day">
        <?php the_time('j') ?>
      </span>
      <span class="year">
        <?php the_time('Y') ?>
      </span>
    </div>

    <div class="postWrapper" id="post-<?php the_ID(); ?>">
      
      <span class="qtd_comments"><?php echo get_comments_number() ?></span>
      <h2 class="postTitle">
        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
      </h2>
      <small> Posted by <a href="/sobre" class="author"><?php the_author(); ?></a></small>

      <div class="post"><?php the_content(__('(more...)')); ?></div>
      <small>
        <p>
          <span class="titleMeta">Categoria:</span>
          <span class="descMeta"><?php the_category(', '); ?></span>
          <span class="titleMeta">Tags:</span>
          <span class="descMeta"><?php the_tags(__('Tags: '), ', ', ' | '); ?></span>
        </p>
        <p>
          <span class="titleMeta">
            <?php comments_popup_link(__('Comentário (0)'), __('Comentário (1)'), __('Comentários (%)'))?>
          </span>
          <?php edit_post_link(__('Edit'), ' | ');?>
        </p>
      </small>

      <hr/>

    </div>

	<?php

  comments_template();

  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php
  endif;

  get_footer();

?>