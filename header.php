<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>

  <style type="text/css" media="screen">
    @import url( <?php bloginfo('stylesheet_url'); ?> );
  </style>

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php
    wp_get_archives('type=monthly&format=link');
    wp_head();
  ?>
</head>

<body>
    <div id="container">

      <div id="header">
        <h1 id="logo"></h1>
        <nav id="access" role="navigation">
          <?php wp_nav_menu( array('menu' => 'Quem faz' )); ?>
        </nav>
      </div>

      <div id="main">
        
        <div id="content">