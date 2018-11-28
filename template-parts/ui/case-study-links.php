<section class="case-study-links">
    <?php
$queryObject = new WP_Query( 'post_type=case_study&posts_per_page=5' );
// The Loop!
if ($queryObject->have_posts()) {
    while ($queryObject->have_posts()) {
        $queryObject->the_post();?>
    <figure class="transition-fade case-study-box">
        <a class="text-container" href="<?php the_permalink(); ?>">
            <h2 class="case-study-title">
                <span>
                    <?php echo get_the_title(); ?></span>
            </h2>
            <h3 class="case-study-subheading">
                <span>
                    <?php echo get_field("case_study_subheading" ); ?></span>
            </h3>
        </a>

        <div class="overlay" style="<?php echo get_field('overlay_background_grad'); ?>"></div>

        <img src="<?php $imageLocation = get_the_post_thumbnail_url(get_the_ID(),'large'); echo $imageLocation; ?>">
    </figure>
    <?php
    }
}
?>
</section>
