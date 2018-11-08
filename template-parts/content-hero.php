<?php
/*
  Template Name: Hero
 */

//Variables
$hero_text = get_field('hero_text');
$hero_subheading = get_field('hero_subheading');
$case_study_subheading = get_field('case_study_subheading');


?>

<!--/////////////////////////////
   //      Hero Section       //
  /////////////////////////////-->
<section class="hero-section scene" id="scene">
    <div class="overlay" style="<?php echo get_field('overlay_background_grad'); ?>"></div>
    <div class="layer img-container"  data-depth="0.40">
        <img class="hero-img" src="<?php echo get_the_post_thumbnail_url() ?>">
    </div>
    <div class="title-card-flex layer" data-depth="0.80">
        <h1 class="class-study-title"> <?php the_title(); ?></h1>
    </div>

</section> <!--end of HERO CONTAINER-->








