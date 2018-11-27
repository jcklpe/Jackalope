<?php

/**
 * The head file. Does not include navigation etc.
 * @package Jackalope
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>

        <!-- Meta Tags-->
        <meta charset="<?php bloginfo('charset'); ?>">
        <!--	<meta name="description" content="UX designer living in Austin, Texas">-->
        <meta name="keywords" content="ux design, designer, interaction, game dev, web development, front-end, css3, edtech, responsive design, logo design, javascript, David, French, Aslan">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">



        <!-- Mobile Theme Color and Icon -->
        <meta name="theme-color" content="#2657eb">
        <meta name="apple-mobile-web-app-status-bar-style" content="#2657eb">
        <meta name="msapplication-navbutton-color" content="#2657eb">
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
        <!-- End of manual preload -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112439418-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-112439418-1');

        </script>

        <?php



        if (is_front_page()) {

            include 'template-parts/critical-path/front-page-crit.php';

        }

        elseif (is_singular('case_study')) {
            include 'template-parts/critical-path/case-study-crit.php';
        }

        elseif (is_singular('side_project')) {
            include 'template-parts/critical-path/side-project-crit.php';
        }

        elseif (is_singular('post')) {
            include 'template-parts/critical-path/blog-crit.php';
        }

        elseif (is_home()) {
            include 'template-parts/critical-path/home-crit.php';
        }

        elseif (is_page('blog')) {
            include 'template-parts/critical-path/blog-archive-crit.php';
        }

        else {
            echo "<script>console.log('no critical path for this path');</script>";
        }
        ?>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >
        <div id="page" class="site">
            <?php get_template_part('template-parts/ui/nav');
