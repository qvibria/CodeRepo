<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php
            global $page, $paged;
            wp_title('|', true, 'right');
            bloginfo('name');
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'toolbox'), max($paged, $page));
            ?></title>
        <meta charset="<?php bloginfo('charset'); ?>" />
		<?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
        <link rel="shortcut icon" href="<?php get_bloginfo("url");?>/favicon.ico" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

     
    </head>
    <body <?php body_class(); ?>>
    
        <div class="wrapper">
           <header>
            <h1>
                <?php echo get_bloginfo('title');?>
            </h1>
                 
            </header><!-- .header-->
            <div class="middle">