<!DOCTYPE html>
<head>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <title><?php  wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php wp_head(); ?>
</head>
<body class="body">
<nav class="header-container">
    <a class="header-title" href="<?php echo home_url('/'); ?>"><img class="header-img" src="http://localhost/wp-content/uploads/2018/04/logo.gif"/></a>
    <?php wp_nav_menu( array ( 'theme_location' => 'header-navi' ) ); ?>
</nav>