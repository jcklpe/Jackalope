<?php
/**
 *Template Name: Portfolio
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Jackalope
*/

get_header(); ?>

 <!--///////////////////
    //               //
   //  HERO STUFF   //
  //               //
 ///////////////////-->


<header class="blog-archive-header">
    <h1>My WebLog</h1>
    <a href="https://www.jackalope.tech/feed/"><h2 class="icon-rss">RSS Subscribe</h2></a>
    <img src="https://www.universetoday.com/wp-content/uploads/2010/09/The-Fairy-of-Eagle-Nebula.jpg"/>

</header>

    <div id="primary" class="content-area">
        <main>



<?php
$blogposts = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'post_id', 'order' => 'DESC' ) );



while( $blogposts->have_posts() ) : $blogposts->the_post();
/////
/// variables
///

$siteRoot = get_site_url();
$imageLocation = get_the_post_thumbnail_url();
$image = $siteRoot . $imageLocation;

?>

        <figure class="blog-post-section lazy" style="<?php $field = 'overlay_background_grad'; echo tag_stripped_field($field); ?>">

<!--            image Container-->
            <div class="img-container rellax" data-rellax-speed="-8" data-rellax-percentage="0.5">
                <div style="background-image: url(<?php echo $imageLocation ?> " class="blog-preview-img"> </div>
            </div>

<!--            Figure caption and Titles-->
            <figcaption class="blog-text">
                <h2 class="blog-title">
                    <span><?php $field = 'html_title'; echo tag_stripped_field($field);   ?></span>
                </h2>

                <p class="blog-exerpt">
                    <span><?php echo get_the_excerpt(); ?></span>
                </p>

            </figcaption>

            <a href="<?php the_permalink(); ?>">View more</a>

        </figure>

    </main>
<?php endwhile; wp_reset_query(); ?>

<?php
get_footer();
