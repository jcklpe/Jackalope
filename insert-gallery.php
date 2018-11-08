<?php
 /* Template Name: Gallery */




while ( have_posts() ) : the_post();
$initialCardLoad = 5;
$loopLazyLoad = 0;
$defaultCardNumber = get_field( "default_card_number" );
?>


    <section class="grid-content">
        <div class="gridGallery <?php the_title_attribute(); ?>">

            <?php
            // check if the repeater field has rows of data
            if ( have_rows( 'card' ) ) {

                // loop through the rows of data
                while ( have_rows( 'card' ) ) :

                    the_row();
                    $loopLazyLoad ++; // iterate on loop each time you loop through
                    // display a sub field value inside a card

                    //VARIABLES//
                    $rootURL    = get_stylesheet_directory_uri();
                    $subDir     = "/_archive/staticSites/";
                    $title      = get_sub_field( 'card_title' );
                    $childImage = get_sub_field( 'card_picture' );
                    $file       = get_sub_field( 'card_video' );
                    $video      = $file['url'];
                    $cardLin    = get_sub_field( 'card_link' );
                    $cardLink   = $rootURL . $subDir . $cardLin;
                    $cardEmbed  = get_sub_field( 'card_embed' );

                    if ( $loopLazyLoad > $initialCardLoad ) {

                        ?> <div class="grid-item"> <?php



                            if ( $cardEmbed ) { ?>
                                <a data-fancybox data-type="iframe" data-src="<?php echo $cardEmbed ?>"
                                   href="javascript:;">
                                    <img class="lazy embedPreviewImg" data-src="<?php echo $childImage['sizes']['medium']; ?>">
                                </a>
                                <!-- end of iframe IF statement --> <?php

                            } else if ( $cardLin ) { ?>
                                <a href="<?php echo $cardLink ?>" target="_blank">
                                    <img class="lazy" src="<?php echo $childImage['sizes']['large']; ?>">
                                </a>
                                <!-- end of link If statement --> <?php

                            } else if ( $childImage ) { ?>
                                <a href="<?php echo $childImage['sizes']['large'];//big one here ?>"  data-caption="<?php echo $title ?>" data-fancybox="gallery">
                                    <img class="lazy" data-src="<?php echo $childImage['sizes']['medium']; ?>" />
                                </a>

                                <!-- End of image IF statement --> <?php

                            } else if ( $video ) { ?>
                                <a id="<?php echo $title ?>" href="javascript:;">
                                    <video class="gallery-video lazy" loop autoplay muted>
                                        <source src="<?php echo $video; ?>" type="video/mp4">
                                    </video>
                                </a>

                                 <script>
                                     domReady( function () {
                                            jQuery("#<?php echo $title?>").on('click', function() {
                                                jQuery.fancybox.open('<video class="video-fancybox" loop autoplay muted><source src="<?php echo $video; ?>" type="video/mp4"></video>');
                                            });

                                    } );
                                 </script>


                                <!-- end of Video IF statement --> <?php
                            } ?>

                        </div> <?php //end of grid item div




                    }// End of if lazy load iter check
                    else { // this is where initial load begins

                        ?> <div class="grid-item"> <?php

                            if ( $cardEmbed ) { ?>
                                <a data-fancybox data-type="iframe" data-src="<?php echo $cardEmbed ?>" href="javascript:;">
                                    <img class="embedPreviewImg lazy" data-src="<?php echo $childImage['sizes']['medium']; ?>">
                                </a>
                                <!-- end of iframe If statement --> <?php

                            } else if ( $cardLin ) { ?>
                                <a href="<?php echo $cardLink ?>" target="_blank">
                                    <img class="" src="<?php echo $childImage['sizes']['large']; ?>">
                                </a>
                                <!-- end of link If statement --> <?php

                            } else if ( $childImage ){ ?>
                                <a data-fancybox="gallery" data-caption="<?php echo $title ?>"
                                   href="<?php echo $childImage['sizes']['large'];//big one here
                                   ?>">
                                    <img class="" src="<?php echo $childImage['sizes']['medium']; ?>">
                                </a>
                                <!--end of Image IF statement --> <?php

                            } else if ( $video ){ ?>
                                <a id="<?php echo $title ?>" href="javascript:;">
                                    <video class="gallery-video" loop autoplay muted>
                                        <source src="<?php echo $video; ?>" type="video/mp4">
                                    </video>
                                </a>

                              <script>
                                   domReady( function () {
                                        jQuery("#<?php echo $title?>").on('click', function() {

                                           jQuery.fancybox.open('<video class= "video-fancybox" loop autoplay muted><source src="<?php echo $video; ?>" type="video/mp4"></video>');
                                       });
                                   } );
                                </script>
                               <!-- end of Video IF statement --> <?php
                            } ?>

                        </div> <!-- end of grid item div -->
                        <!--end of initial card load of loop-->  <?php


                    }

                endwhile; ////end of while statement that loops for as long as rows have data
                ///
            } //end of top level if statement that checks if rows have data
            else {
                // rows do not have any data so do nothing
            }?>

        </div>

    </section>

    <script>
        domReady( function () {
            var macy_instance = Macy.init({
                container: '.<?php the_title_attribute(); ?>',
                trueOrder: false,
                waitForImages: true,
                debug: false,
                margin: 0,
                columns: <?php echo $defaultCardNumber ?>,
                breakAt: {
                    1200: 4,
                    940: 3,
                    520: 1
                }
            });


            macy_instance.runOnImageLoad(function () {
                macy_instance.recalculate(true);
            }, true); //End of Macy stuff


        });

    </script>

<?php endwhile;?>

