<?php
////////////////////////////////////
//-CASE STUDIES
//case studies loop starts here
$loop = new WP_Query(array('post_type' => 'case_study', 'orderby' => 'post_id', 'order' => 'ASC'));
while ($loop->have_posts()) : $loop->the_post();

$siteRoot = get_site_url();
$imageLocation = get_the_post_thumbnail_url(get_the_ID(), 'large');
$image = $siteRoot . $imageLocation;
$subheading = 'case_study_subheading';
 ?>

<section class=" case-study-section container-fluid  parallaxin2">

    <div class="overlay" style="
        <?php echo get_field('overlay_background_grad'); ?>">
    </div>


    <a class="case-study-box" href="<?php the_permalink(); ?>">
        <div class="title-card-flex layer" data-relative-input="true" data-depth="0.15">
            <h1 class="case-study-title">
                <span class="title">
                    <?php the_title(); ?>
                </span>
            </h1>

            <h2 class="case-study-subheading">
                <span>
                    <?php
                            echo tag_stripped_field($subheading); ?>
                </span>
            </h2>

        </div>
    </a>

    <div class="rellax" data-rellax-speed="-10">
        <div class="img-container layer" data-relative-input="true" data-depth="0.08">
            <img class="section-img lazy" data-src="<?php echo $imageLocation ?>">
            <!-- the above echo of image location was done because Local by Flywheel was acting wonky.   -->
        </div>
</section>
<?php endwhile;
wp_reset_query();
