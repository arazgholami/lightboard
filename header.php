<!doctype html>
<html class="no-js" lang="">
    <head>
        <!--Title-->
        <title>
            <?php
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo "";
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
            ?>
        </title>
        <!--Meta-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="tags" content="<?php $posttags = get_the_tags(); if ($posttags) {foreach($posttags as $tag) {echo ",".$tag->name;}}?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Favicon-->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico?ver=2" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico?ver=2" type="image/x-icon">
        <!--Styles-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=0.0">
        <!--Scripts-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    
    <nav class="navbar-fixed-top" role="navigation">
       <div class="container">
          <a class="pull-right navbar-brand" href="<?php bloginfo( 'home' ); ?>">
            <!-- <img src="img/logo.png" alt="Logo"> -->
            <h1><?php bloginfo( 'name' ); ?></h1>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-text.png" alt="Logo" id="navlogo">
          </a>
          <ol class="pull-left">
              <?php
                  wp_list_pages(array(
                      'link_after'   => '',
                      'link_before'  => '',
                      'post_type'    => 'page',
                      'post_status'  => 'publish',
                      'show_date'    => '',
                      'sort_column'  => 'menu_order, post_title',
                      'sort_order'   => '',
                      'title_li'     => __('')
                  ));
              ?>
          </ol>
      </div>
    </nav>