<?php

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
function html5_search_form( $form ) { 
     $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
     <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Buscar" />
     <input type="submit" id="searchsubmit" value="' .'" />
     </form></section><hr/>';
     return $form;
}

 add_filter( 'get_search_form', 'html5_search_form' );
?>
