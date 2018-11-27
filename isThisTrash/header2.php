<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jackalope
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <!-- Meta Tags-->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="description" content="UX designer living in Austin, Texas">
        <meta name="keywords" content="ux design, designer, interaction, game dev, web development, front-end, css3, edtech, responsive design, logo design">
        <meta name="author" content="David Aslan French">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">



        <!-- Mobile Theme Color and Icon -->
        <meta name="theme-color" content="#2657eb">
        <meta name="apple-mobile-web-app-status-bar-style" content="#2657eb">
        <meta name="msapplication-navbutton-color" content="#2657eb">
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
        <!-- End of manual preload -->





        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content', 'jackalope' ); ?></a>


            <!--//- Nav -->
            <nav class="navbar navbar-default navcolor rollovernav customnav purgeborder">

                <!--//////Toggle//////-->

                <button type="button" class="hamburger hamburger--spring navbar-toggle btn-2 btn-2a " data-toggle="collapse"
                    data-target="#hamburgerfillins">

                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>


                </button>


                <!--//////Navbar Links//////-->
                <div class="collapse navbar-collapse customnav rollovernav topdawg" id="hamburgerfillins">

                    <!--//////Left Nav//////-->
                    <div class="nav navbar-nav navbar-left customnav topdawg purgeborder">
                        <a href="<?php echo get_home_url(); ?>/blog/"><span data-hover="My Weblog">My Weblog&nbsp;
                            </span></a>

                        <a href="<?php echo get_home_url(); ?>/consultation/"><span data-hover="Free Consultation!">Free
                                Consultation!&nbsp; </span></a>
                    </div>

                    <!--//////Right Nav//////-->
                    <div class="nav navbar-nav navbar-right customnav topdawg">
                        <a href="<?php echo get_home_url(); ?>/"><span data-hover="Portfolio/About">Portfolio/About</span></a>
                    </div>
                    <!--//////Navbar Links//////-->
                </div>

            </nav>
