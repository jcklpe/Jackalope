<?php

get_template_part('template-parts/ui/header'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/hero' ); ?>


		<section class="container">
			<?php
			get_template_part( 'template-parts/content-case_study', get_post_format() );?>
		</section>
		&nbsp;

		<?php endwhile; // End of the loop.
		?>

	</main>
	<!-- #main -->
</div>
<!-- #primary -->

<?php

 get_template_part( 'template-parts/ui/case-study-links');

get_template_part('template-parts/ui/footer');
