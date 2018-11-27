<!--//- SIDE PROJECTS GRID -->
<section class="content sideProjects">

    <!--//-Background -->
    <div class=" overlay overlay-sideProjects">
        <div class="hack-fix rellax" data-rellax-speed="0" data-rellax-percentage="0.5">
            <div class="overlay-img rellax" data-rellax-speed="-10" style=" background: url(< php echo $sideProjectsBackground ?>)">
            </div>
        </div>
    </div>
    <!--//-end of background -->

    <h2>
        <span data-depth="0.2">
            Side Projects
        </span>
    </h2>

    <div class="side-projects-grid ">

        <?php //- query loop

$loop = new WP_Query(array('post_type' => 'side_project', 'orderby' => 'post_id', 'order' => 'ASC'));

    //While loop cycling through sideproject posts.
while ($loop->have_posts()) : $loop->the_post();
$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
        <figure class=" side-project-box parallaxin2" style="<?php
            $field = 'overlay';
            echo tag_stripped_field($field); ?>">
            <div class="img-container layer" data-relative-input="true" data-depth="0.10">

                <?php if ('vertical' == get_field('center_vertical')) : ?>
                <img class="side-project-img lazy" style="top:-300px; right:100px;" data-src="<?php echo $image[0]; ?>" />

                <?php else : ?>
                <img class="side-project-img lazy" data-src="<?php echo $image[0]; ?>" />
                <?php endif; ?>



            </div>
            <figcaption class="layer" data-relative-input="true" data-depth="0.40">
                <div>
                    <h3><span>
                            <?php the_title(); ?></span></h3>
                    <p><span>
                            <?php $field = 'gallery_subheading';
                            echo tag_stripped_field($field); ?></span></p>
                </div>

            </figcaption>
            <a href="<?php the_permalink(); ?>">View more</a>
        </figure>



        <?php endwhile;
    wp_reset_query(); ?>

    </div>
    <!--end of gallery grid -->

</section>
<!--//-END SIDE PROJECTS-->
