<?php

  register_sidebar(
    array(
      'id' => 'primary',
      'name' => __( 'Primary' ),
      'description' => __( 'The #cool side.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );

?>
