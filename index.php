<?php get_header(); ?>

<?php if (have_posts()): ?>

  <ol id="posts">

    <?php while (have_posts()) : the_post(); ?>

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

      <li class="postWrapper" id="post-<?php the_ID(); ?>">

        <div class="icon_comments">
          <span class="qtd_comments"><?php echo get_comments_number() ?></span>
        </div>
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
            <span class="descMeta"><?php the_tags(__(''), ', '); ?></span>
          </p>
          <p>
            <span class="titleMeta">
              <?php comments_popup_link(__('Comentário (0)'), __('Comentário (1)'), __('Comentários (%)'))?>
            </span>
            <?php edit_post_link(__('Edit'), ' | ');?>
          </p>
        </small>

        <hr/>
      </li>

      <?php comments_template();?>

    <?php endwhile; ?>

    <div id="links" class="container">
        <div id="old_posts"><?php next_posts_link('Post anterior','') ?></div>
        <div id="new_posts"><?php previous_posts_link('Post seguinte') ?></div>
    </div>

  </ol>

<?php else: ?>

  <p class="ops">Ops!</p>
  <p class="not_found">Nenhum post encontrado.</p>

<?php endif;?>

<?php get_footer(); ?>
