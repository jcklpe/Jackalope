<?php


get_template_part('template-parts/ui/header');

//Variables
while ( have_posts() ) : the_post();
$initialCardLoad = 5;
$loopLazyLoad = 0;

?>
<section class="grid-content">
    <div id="grid" class="gridGallery">

        <?php



// check if the repeater field has rows of data
if( have_rows('card') ):

    // loop through the rows of data
    while ( have_rows('card') ) : the_row();
$loopLazyLoad++; // iterate on loop each time you loop through
        // display a sub field value inside a card
        ?>
        <?php
            //VARIABLES//
            $title =  get_sub_field('card_title');
            $childImage = get_sub_field('card_picture');
            $file = get_sub_field('card_video');
            $video = $file['url'];

            if($loopLazyLoad > $initialCardLoad):

                if( $childImage ): ?>
        <div class="grid-item">


            <a data-fancybox="gallery" data-caption="<?php echo $title ?>" href="<?php
                        echo $childImage['sizes']['large'];//big one here ?>">
                <img class="lazy" data-src="<?php echo $childImage['sizes']['medium']; ?>">
            </a>
            <?php endif; ?>

            <?php if( $video ): ?>
            <div class="grid-item">
                <video class="gallery-video lazy" loop autoplay muted>
                    <source src="<?php echo $video; ?>" type="video/mp4">
                </video>
                <?php endif; ?>
            </div>
            <?php //end of grid item div

            else : // Note the combination of the words.
            if( $childImage ): ?>
            <div class="grid-item">
                <a data-fancybox="gallery" data-caption="<?php echo $title ?>" href="<?php
                echo $childImage['sizes']['large'];//big one here ?>">
                    <img class="" src="<?php echo $childImage['sizes']['medium']; ?>">
                </a>
                <?php endif; ?>

                <?php if( $video ): ?>
                <div class="grid-item">
                    <video class="gallery-video" loop autoplay muted>
                        <source src="<?php echo $video; ?>" type="video/mp4">
                    </video>

                    <?php endif; ?>
                </div> <!-- end of grid item div -->

                <?php endif; //end of initial card load of loop


    endwhile; //end of while statement

else :
 ?>
                <p>no rows found</p>
                <?php
    // no rows found

endif;

?>



            </div>

</section>
<?php endwhile;
get_template_part('template-parts/ui/footer');

?>
