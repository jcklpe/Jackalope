<?php
/*
  Template Name: Home Page
 */

get_header();
get_template_part('template-parts/content', 'hero-frontpage');

////////////////////////////////////
//-CASE STUDIES
//case studies loop starts here
$loop = new WP_Query(array('post_type' => 'case_study', 'orderby' => 'post_id', 'order' => 'ASC'));
while ($loop->have_posts()) : $loop->the_post();

$siteRoot = get_site_url();
$imageLocation = get_the_post_thumbnail_url(get_the_ID(), 'large');
$image = $siteRoot . $imageLocation;
$subheading = 'case_study_subheading'; ?>

    <section class=" case-study-section container-fluid  parallaxin2">

        <div
        class="overlay"
        style="
        <?php echo get_field('overlay_background_grad'); ?>">
        </div>


        <a class="case-study-box" href="<?php the_permalink(); ?>">
            <div
                class="title-card-flex layer"
                data-relative-input="true"
                data-depth="0.15">
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

        <div
            class="rellax"
            data-rellax-speed="-10" >
        <div
            class="img-container layer"
            data-relative-input="true"
            data-depth="0.08">
                <img
                class="section-img lazy"
                data-src="<?php echo $imageLocation ?>">
                <!-- the above echo of image location was done because Local by Flywheel was acting wonky.   -->
        </div>
    </section>
<?php endwhile;
wp_reset_query();

//-ABOUT ME
$aboutMeBackground = get_field('aboutme_background');
$sideProjectsBackground = get_field('sideprojects_background'); ?>
<section class="content aboutMe">

    <h2>
        <span>About Me</span>
    </h2>
    <!--//- IMAGE BACKGROUND-->
    <div class="overlay overlay-aboutMe">
        <div class="hack-fix rellax"  data-rellax-speed="0">
            <div
            class="overlay-img rellax"
            data-rellax-speed="-10"
            style=" background: url(<?php echo $aboutMeBackground ?>)">
            </div>
        </div>
    </div>

    <!--//-About ME-->
    <div class="aboutMe">
        <div class="about-me-text">
            <p>
                <?php echo get_field('about_me_summary'); ?>
            </p>
        </div>

        <!--//-Picture and contact-->
        <div class="img-wrapper parallaxin2">
            <img
            class="layer"
            data-relative-input="true"
            data-depth="0.30"
            src="<?php
                $image = get_field('picture_of_me');
                echo $image['url']; ?> ">

                <div
                class="links layer"
                data-relative-input="true"
                data-depth="0.40">

                    <a
                        class="email"
                        data-relative-input="true"
                        data-depth="0.40"
                        href="mailto:david@jackalope.tech"
                        target="_blank"
                        rel="noopener">
                            [ ✉- david@jackalope.tech ]
                    </a>

                    <a
                        class="email-mobile"
                        data-relative-input="true"
                        data-depth="0.40"
                        href="mailto:david@jackalope.tech"
                        target="_blank"
                        rel="noopener">
                            [ ✉ ]
                    </a>

                    <a
                        class="telephone"
                        data-relative-input="true"
                        data-depth="0.40"
                        href="tel:+1-409-594-7119"
                        target="_blank"
                        rel="noopener"  >
                            [ ☎- (409) 594-7119 ]
                    </a>
                </div>
                <!--//-END OF LINKS-->
        </div>
        <!--//-end of picture and contacts-->
    </div>
    <!--//-end of about me-->

        <!--//-SKILLSS -->
        <div class="skills">
            <h3><span>Skills</span></h3>

                <h4>Development:</h4>
                    <p>
                        <?php echo get_field('development-skills'); ?>
                    </p>

                <h4>Design:</h4>
                    <p>
                        <?php echo get_field('design-skills'); ?>
                    </p>

                <h4>Tools:</h4>
                    <p>
                        <?php echo get_field('tool-skills'); ?>
                    </p>
        </div>
        <!-- end of skills section -->


    <a href="https://cloud.jackalope.tech/s/resumes"">
    <button class="resume-button downloadbtn icon-download">
        <span>[ Download Resumé.txt ]</span>
        </button>
        </a>

</section>
<!--//- END ABOUT ME SECTION -->

<!--//- SIDE PROJECTS -->
    <section class="content sideProjects">

        <!--//-Background-->
        <div class=" overlay overlay-sideProjects" >
             <div class="hack-fix rellax"
             data-rellax-speed="-5" data-rellax-percentage="0.5" >
                <div
                    class="overlay-img rellax"
                    data-rellax-speed="-10"
                    style=" background: url(<?php echo $sideProjectsBackground ?>)">
                </div>
            </div>
        </div>
        <!--//-end of background-->

        <h2>
            <span
            data-depth="0.2">
                Side Projects
            </span>
        </h2>

        <div class="side-projects-grid "  >

        <?php //- query loop

        $loop = new WP_Query(array('post_type' => 'side_project', 'orderby' => 'post_id', 'order' => 'ASC'));

            //While loop cycling through sideproject posts.
        while ($loop->have_posts()) : $loop->the_post();
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
            <figure
            class=" side-project-box parallaxin2"
            style="<?php
                    $field = 'overlay';
                    echo tag_stripped_field($field); ?>">
                <div
                class="img-container layer"
                data-relative-input="true"
                data-depth="0.10" >

                    <?php if ('vertical' == get_field('center_vertical')) : ?>
                        <img
                        class="side-project-img lazy"
                        style="top:-300px; right:100px;"
                        data-src="<?php echo $image[0]; ?>" />

                    <?php else : ?>
                            <img
                            class="side-project-img lazy"
                            data-src="<?php echo $image[0]; ?>" />
                    <?php endif; ?>



                    </div>
                    <figcaption class="layer" data-relative-input="true" data-depth="0.40">
                        <div>
                            <h3 ><span><?php the_title(); ?></span></h3>
                            <p><span><?php $field = 'gallery_subheading';
                                    echo tag_stripped_field($field); ?></span></p>
                        </div>

                    </figcaption>
                    <a href="<?php the_permalink(); ?>">View more</a>
                </figure>



            <?php endwhile;
            wp_reset_query(); ?>

        </div> <!--end of gallery grid -->

    </section>
<!--//-END SIDE PROJECTS-->



<?php
get_footer();
