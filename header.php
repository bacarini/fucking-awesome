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

  <meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1, user-scalable=false">
  <link rel="stylesheet" type="text/css" media="screen" href="http://hashtagcool.com.br/wp-content/themes/fucking-awesome/style.css">

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="shortcut icon" href="http://www.hashtagcool.com.br/wp-content/themes/fucking-awesome/favicon.ico" type="image/x-icon">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>

</head>

<body>
      <?php include_once("analyticstracking.php") ?>
      <header class="container">
        <a href="http://www.hashtagcool.com.br"><h1 id="logo"></h1></a>
        <nav id="access" role="navigation">
          <?php wp_nav_menu( array('menu' => 'Quem faz' )); ?>
        </nav>
      </header>

      <main id="main" class="container">
        <article>
