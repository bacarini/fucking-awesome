<?php get_header(); ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <div class="postWrapper" id="post-<?php the_ID(); ?>">

      <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <small><?php the_date(); ?> by <?php the_author(); ?></small>
      <?php echo get_avatar( $comment, 32 ); ?>

      <div class="post"><?php the_content(__('(more...)')); ?></div>
      <p class="postMeta"><?php edit_post_link(__('Edit'), ''); ?></p>
    </div>

    <?php comments_template(); ?>

  <?php endwhile; else: ?>

  <p class="ops">Ops!</p>
  <p class="not_found">Nenhum post encontrado.</p>

<?php endif; ?>

<?php get_footer(); ?>
