<?php
/**
 * MegaMultiMedia Gallery block
 *
 * @package      MegaMultiMediaGallery
 * @author      Aslan French
 * @since        1.0.0
 * @license      GPL-2.0+
**/
$initialCardLoad = 5;
$loopLazyLoad = 0;
$defaultCardNumber = get_field( "default_card_number" );
$galleryName = get_field ("gallery_name");

?>


<section class="grid-content">
	<div class="gridGallery <?php echo $galleryName?>">
		<?php
        // check if the repeater field has rows of data
        if ( have_rows( 'card' ) ) {
            // loop through the rows of data
            while ( have_rows( 'card' ) ) :
                the_row();
            	$loopLazyLoad ++; // iterate on loop each time you loop through
                // display a sub field value inside a card
                //VARIABLES//
                $rootURL    = get_stylesheet_directory_uri();
                $subDir     = "/_archive/staticSites/";
                $title      = get_sub_field( 'card_title' );
                $childImage = get_sub_field( 'card_picture' );
                $file       = get_sub_field( 'card_video' );
                $video      = $file['url'];
                $cardLin    = get_sub_field( 'card_link' );
                $cardLink   = $rootURL . $subDir . $cardLin;
				$cardEmbed  = get_sub_field( 'card_embed' );

				//- Lazy Items
				if ( $loopLazyLoad > $initialCardLoad ) {?>
					<div class="grid-item">
						<?php switch (true) {

							//- EMBED
							case $cardEmbed:?>
								<a
								data-fancybox
								data-type="iframe"
								data-src="<?php echo $cardEmbed ?>"
								href="javascript:;">
									<img
									class="lazy embedPreviewImg"
									data-src="<?php echo $childImage['sizes']['medium']; ?>">
								</a>
							<?php break; ?>

							<?php
							//- LINK
							 case $cardLin: ?>
								<a
								href="<?php echo $cardLink ?>"
								target="_blank">
									<img
									class="lazy"
									src="<?php echo $childImage['sizes']['large']; ?>">
								</a>
							<?php break; ?>

							<?php
							//- IMAGE
							case $childImage:?>
								<a
								href="<?php echo $childImage['sizes']['large'];//big one here ?>"
								data-caption="<?php echo $title ?>"
								data-fancybox="gallery">
                					<img class="lazy"
									data-src="<?php echo $childImage['sizes']['medium']; ?>" />
            					</a>
							<?php break; ?>

							<?php
							//- VIDEO
							case $video: ?>
								<a
								id="<?php echo $title ?>"
								href="javascript:;">
                					<video
									class="gallery-video lazy"
									loop autoplay muted>
                    					<source
										src="<?php echo $video; ?>"
										type="video/mp4">
                					</video>
            					</a>
            					<script>
                					domReady( function () {
                                        jQuery("#<?php echo $title?>").on('click', function() {
                                            jQuery.fancybox.open('<video class="video-fancybox" loop autoplay muted><source src="<?php echo $video; ?>" type="video/mp4"></video>');
                                            });
                                    } );
                                 </script>
							<?php break; ?>

							<?php default:
								echo "<script>console.log( 'PHP Debug: It dont work bub');</script>";
						} ?>
					</div>
				<?php } // end of lazy load iter check if statement

				//- Initial item load (non-lazy items)
				else {?>
					<div class="grid-item">
					<?php
					switch (true) {

						//- EMBED
    					case $cardEmbed:?>
							<a
							data-fancybox
							data-type="iframe"
							data-src="<?php echo $cardEmbed ?>"
							href="javascript:;">
								<img
								class="embedPreviewImg lazy"
								data-src="<?php echo $childImage['sizes']['medium']; ?>">
							</a>
						<?php break; ?>

						<?php
						//- LINK
						case $cardLin: ?>
							<a
								href="<?php echo $cardLink ?>"
								target="_blank">
									<img
									class=""
									src="<?php echo $childImage['sizes']['large']; ?>">
							</a>
						<?php break; ?>

						<?php
						//- IMAGE
						case $childImage:?>
							<a
								data-fancybox="gallery"
								data-caption="<?php echo $title ?>"
								href="<?php echo $childImage['sizes']['large'];//big one here?>">
									<img
									class=""
									src="<?php echo $childImage['sizes']['medium']; ?>">
							</a>
						<?php break; ?>

						<?php
						//- VIDEO
						case $video: ?>
							<a
								id="<?php echo $title ?>"
								href="javascript:;">
									<video
									class="gallery-video"
									loop autoplay muted>
										<source
										src="<?php echo $video; ?>"
										type="video/mp4">
									</video>
							</a>
							<script>
									// ADD FANCYBOOX gallery specific identifiers here
									domReady(function () {
									jQuery("#<?php echo $title?>").on('click', function () {
									jQuery.fancybox.open(
									'<video class= "video-fancybox" loop autoplay muted><source src="<?php echo $video; ?>" type="video/mp4"></video>'
											);
										});
									});
							</script>
						<?php break; ?>

						<?php default:
							echo "<script>console.log( 'PHP Debug: It dont work bub');	</script>";
						} ?>
					</div>

				<?php } // end of lazy loaded else statement

    		endwhile;//end of while statement that loops for as long as rows have data
		} //end of top level if statement that checks if rows have data

		else {
		//nothing here
		}?>
	</div>
	<!--//-end of grid gallery -->
</section>
<!--//- End of grid content -->

<script>
	domReady(function () {
		var macy_instance = Macy.init({
			container: '.<?php echo $galleryName ?>',
			trueOrder: false,
			waitForImages: true,
			debug: false,
			margin: 0,
			columns: <?php echo $defaultCardNumber ?>,
			breakAt: {
				1200: 4,
				940: 3,
				520: 1
			}
		});
		macy_instance.runOnImageLoad(function () {
			macy_instance.recalculate(true);
		}, true); //End of Macy stuff
	});

</script>