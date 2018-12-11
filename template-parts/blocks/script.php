					<div class="grid-item">
						<?php
						//- EMBED
							if ( $cardEmbed ) { ?>
								<a
								data-fancybox
								data-type="iframe"
								data-src="<?php echo $cardEmbed ?>"
								href="javascript:;">
									<img
									class="embedPreviewImg lazy"
									data-src="<?php echo $childImage['sizes']['medium']; ?>">
								</a>
						<?php } //end of embed ?>

						<?php
						//- LINK
						 	else if ( $cardLin ) { ?>
								<a
								href="<?php echo $cardLink ?>"
								target="_blank">
									<img
									class=""
									src="<?php echo $childImage['sizes']['large']; ?>">
								</a>
						<?php } // end of link ?>

						<?php
						//- IMAGE
							else if ( $childImage ){ ?>
								<a
								data-fancybox="gallery"
								data-caption="<?php echo $title ?>"
								href="<?php echo $childImage['sizes']['large'];//big one here?>">
									<img
									class=""
									src="<?php echo $childImage['sizes']['medium']; ?>">
								</a>
						<?php } // end of image ?>

						<?php
						//- VIDEO
						 	else if ( $video ){ ?>
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
									domReady(function () {
										jQuery("#<?php echo $title?>").on('click', function () {

											jQuery.fancybox.open('<video class= "video-fancybox" loop autoplay muted><source src="<?php echo $video; ?>" type="video/mp4"></video>'
											);
										});
									});
								</script>
						<?php } // end of video?>

					</div>