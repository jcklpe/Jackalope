<?php
/*
  Template Name: Hero
 */




?>

<!--/////////////////////////////
   //      Hero Section       //
  /////////////////////////////-->



 <?php $waitForIt = get_field('wait_for_it'); ?>


<section  class="hero-section">

    <div class="glitch-container" style=" background: url(<?php echo $waitForIt ?>)" >

    </div>


</section>

<script>

    console.log("self invoking function has run for hero section");
    var glitchContainer = jQuery('.glitch-container');


    var WindowWidth = jQuery(window).width();

    if (WindowWidth < 1200) {

        console.log("small screen invoked");
        //It is a small screen
        glitchContainer.append("<iframe id=\"ytplayer\" src=\"https://www.youtube.com/embed?v=HTg9qV_ftng?controls=0&enablejsapi=1&modestbranding=1&cc_load_policy=1&showinfo=0&rel=0&loop=1&list=PL0K8PeqvBqOI4b_HWaQ6FcbSKz58aRFXN\" frameborder=\"0\"></iframe>");
    } else {
        //It is a big screen or desktop

        glitchContainer.append("<iframe id=\"ytplayer\" src=\"https://www.youtube.com/embed/qkOj-6QdagI?controls=0&enablejsapi=1&modestbranding=1&cc_load_policy=1&showinfo=0&rel=0&loop=1&list=PL0K8PeqvBqOIOP9v7dZg93CeyYWbp3BIA\" frameborder=\"0\"></iframe>");

    }



    var player;

    function onYouTubeIframeAPIReady() {

        player = new YT.Player('ytplayer', {
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }

        });

    }



    function onPlayerReady(event) {
        document.getElementById('ytplayer');
        event.target.playVideo();
        player.mute();

    }

    // Hide YouTube loading animation
    function onPlayerActive(playerStatus) {
        if (playerStatus === 1) {
            document.getElementById('ytplayer').classList.add('is-active');

        } else {
            document.getElementById('ytplayer').classList.remove('is-active');

        }


    }
    function onPlayerStateChange(event) {
        onPlayerActive(event.data);

    }







    console.log("end of the SCRIPT TAG invokes");


</script>




