<?php
get_template_part('template-parts/ui/header'); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
		while ( have_posts() ) : the_post();
       get_template_part( 'template-parts/hero' ); ?>


        <section class="blog-content container">
            <?php
			get_template_part( 'template-parts/content', get_post_format() );?>
        </section>
        <?php
//			the_post_navigation(); ?>

        <div id="cooler-nav" class="navigation">
            <?php $prevPost = get_previous_post(true);
if($prevPost) {?>
            <div class="nav-box previous">
                <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(400,400) );?>
                <?php previous_post_link('%link',"$prevthumbnail  <p><span>%title</span></p>", TRUE); ?>
            </div>

            <?php }
$nextPost = get_next_post(true);
if($nextPost) { ?>
            <div class="nav-box next">
                <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(400,400) ); } ?>

                <?php next_post_link('%link',"$nextthumbnail  <p><span>%title</span></p>", TRUE); ?>
            </div>


        </div>
        <!--#cooler-nav div -->




        <?php endwhile; // End of the loop.
		?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part('template-parts/ui/footer');
