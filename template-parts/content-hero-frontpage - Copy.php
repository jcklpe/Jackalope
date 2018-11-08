<?php
/*
  Template Name: Hero
 */




?>

<!--/////////////////////////////
   //      Hero Section       //
  /////////////////////////////-->

<script>

    domReady(function() {


console.log("self invoking function has run for hero section");
        var video = jQuery('.hero-section');

        var WindowWidth = jQuery(window).width();

        if (WindowWidth < 1200) {
            console.log("small screen invoked");
            //It is a small screen
            video.append("<video loop class=\"glitch-header\" style=\"background: #010015\" muted autoplay playsinline id=\"glitch-header\" preload=\"auto\">" + "<source src='video/GlitchHeader_mobile.mp4' type='video/mp4' >" + "</video>");
        } else {
            //It is a big screen or desktop
            console.log("desktop invoked");
            video.append("<video muted autoplay playsinline loop preload=\"auto\" class=\"glitch-header\" style=\"background: #010015\" id=\"glitch-header\" >" +
                "<source src='video/GlitchHeader_desktop.mp4' type='video/mp4' >" +
                "</video>");
        }



    });
</script>

<section class="hero-section" id="hero-section">


</section> <!--end of HERO CONTAINER-->







