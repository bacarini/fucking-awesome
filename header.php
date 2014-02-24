<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <?php
  if(is_single() || is_page() || is_category() || is_home()) {
          echo '<meta name="robots" content="all,noodp" />';
  }
  else if(is_archive()) {
          echo '<meta name="robots" content="noarchive,noodp" />';
  }
  else if(is_search() || is_404()) {
          echo '<meta name="robots" content="noindex,noarchive" />';
  }
  ?>

  <title><?php wp_title('', true, ‘right’); ?><?php bloginfo(‘name’); ?></title>

  <style type="text/css" media="screen">
    @import url( <?php bloginfo('stylesheet_url'); ?> );
  </style>

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>

</head>

<body>

      <header class="container">
        <h1 id="logo"></h1>
        <nav id="access" role="navigation">
          <?php wp_nav_menu( array('menu' => 'Quem faz' )); ?>
        </nav>
      </header>

      <main id="main" class="container">
        <article>
