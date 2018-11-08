<?php
/*
  Template Name: Hero
 */

//Variables
$hero_text = get_field('hero_text');
$hero_subheading = get_field('hero_subheading');
$case_study_subheading = get_field('case_study_subheading');
$html_title = get_field('html_title');


?>

<!--/////////////////////////////
   //      Hero Section       //
  /////////////////////////////-->
<section class="hero-section blog-hero-section parallaxin">
    <div class="overlay" style="<?php echo get_field('overlay_background_grad'); ?>"></div>
    <div class="img-container">
        <img class="hero-img layer"  data-depth="0.10" src="<?php echo get_the_post_thumbnail_url() ?>">
    </div>
    <div class="title-card-flex">
        <h1 class="slabtarget layer" data-depth="0.20"> <?php echo $html_title ?></h1>
    </div>

</section> <!--end of HERO CONTAINER-->








