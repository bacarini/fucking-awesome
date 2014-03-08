<?php
  function html5_search_form( $form ) {
       $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
      <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
       <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Buscar" />
       <input type="submit" id="searchsubmit" value="' .'" />
       </form></section><hr/>';
       return $form;
  }
  add_filter('get_search_form', 'html5_search_form' );

  register_sidebar(
    array(
      'id' => 'primary',
      'name' => __( '#Cool sidebar' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '<hr/></h2>'
    )
  );

  function my_js(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('validate',get_template_directory_uri().'/js/jquery.validate.min.js', array('jquery'));
    wp_enqueue_script('site',get_template_directory_uri().'/js/site.js', array('jquery'));
    wp_enqueue_script('prettyphoto',get_template_directory_uri().'/js/jquery.prettyPhoto.js', array('jquery'));
  }

  add_action('wp_enqueue_scripts', 'my_js');

  function comments_start($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP); ?>

    <li <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <div class="comment-author vcard comment_image">
            <?php echo get_avatar( $comment, 76 ); ?>
            <small>
                <p class="titleMeta"><?php comment_author_link() ?></p>
                <p><?php echo get_comment_date('j.m.Y') ?> </p>
                <p>at <?php echo strtoupper(get_comment_time()) ?></p>
                <?php edit_comment_link(__("Edit")); ?>
            </small>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php _e('Obrigado. Seu comentário passará por moderação e em breve será postado.') ?></em>
            <br />
        <?php endif; ?>

        <div class="comment_text"><?php comment_text() ?></div>

        <div class="reply">
          <?php comment_reply_link(array_merge( $args, array('add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </div>
<?php
  }
  // Removes Trackbacks from the comment cout
  add_filter('get_comments_number', 'comment_count', 0);
  function comment_count( $count ) {
    if ( ! is_admin() ) {
      global $id;
      $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
      return count($comments_by_type['comment']);
    } else {
      return $count;
    }
  }
?>
