<?php
/**
 * Template Name: Home Page Template
 */
$introPhoto = get_field('intro_photo');
$headline = get_field('headline');
$introText = get_field('intro_text');
$serviceIntro = get_field('service_intro');

get_header(); ?>

	<div id="main" class="main-wrapper">
		<div class="hero-section main-section row">
			<div class="container">
				<div class="col-md-6 intro-photo" style="background-image: url('<?php echo $introPhoto;?>')"></div>
				<div class="intro col-md-6">
					<div class="vert-center-wrap">
						<div class="vert-center-content">
							<h1><?php echo $headline;?></h1>
							<p><?php echo $introText;?></p>
							<div class="learn-more-btn"><a href="<?php echo get_site_url();?>/about">learn more &rarr;</a></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-section about-preview row">
			<div class="container">
				<div class="col-md-12 text-center service-text">
					<h1>Services</h1>
					<div class="bar"></div>
					<p><?php echo $serviceIntro;?></p>
					<!-- Change this to a relationship field. -->
					<div class="service-photo-wrap">
						<?php 
							global $post;
							$services = get_field('service_photos');
						?>
						<?php if($services):?>
							<?php foreach($services as $post): setup_postdata();
								$imgID = get_post_thumbnail_id($post->ID);
								$featuredImage = wp_get_attachment_image_src($imgID, 'full' );
								$imgURL = $featuredImage[0];
							?>
								<div class="service-photo" style="background-image: url('<?php echo $imgURL;?>');">
									<a href="<?php echo get_site_url();?>/services">
										<div class="overlay">
											<div class="vert-center-wrap">
												<div class="vert-center-content">
													<h5 class="service-label">
														<?php the_title();?></a>
													</h5>
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php endforeach; wp_reset_postdata();?>
						<?php endif;?>
					</div>
					
					<div class="learn-more-btn center-btn">
						<a href="<?php echo get_site_url();?>/services">view all&rarr;</a>
					</div>
				
				</div>
			</div>
		</div>
		<div class="main-section testimonial-feature row">
			<div class="container text-center">
				<h1>Testimonials</h1>
				<div class="bar"></div>
				<div class="col-md-12 testimonial-slides centered">
					<?php $testimonialFeature = get_field('testimonial_feature'); ?>
					<?php if($testimonialFeature):?>
						<?php foreach($testimonialFeature as $post): setup_postdata();
							$testimonialPreview = get_field('testimonial_preview');
							$clientName = get_field('client_name');
						?>
						<div class="testimonial-preview">
							<div class="vert-center-wrap">
								<div class="vert-center-content">
									<?php echo $testimonialPreview;?><br/>
									- <?php echo $clientName;?>
								</div>
							</div>
						</div>
						<?php endforeach; wp_reset_postdata();?>
					<?php endif;?>
				</div>
				<div class="learn-more-btn centered">
					<a href="<?php echo get_site_url();?>/testimonials">view all &rarr;</a>
				</div>
			</div>	
		</div>
		<div class="row main-section associates-wrap">
			<div class="container text-center">
				<div class="col-md-12 associates">
					<h1>Associates</h1>
					<div class="bar"></div>
					<?php if(have_rows('associates')): while(have_rows('associates')): the_row();
						$associateLogo = get_sub_field('associate_logo'); 
					?>
						<div class="associate-logo" style="background-image: url('<?php echo $associateLogo;?>');"></div>
					<?php endwhile; endif;?>
					
				</div>
			</div>
		</div>
		<?php include('callout.php');?>
	</div>

<?php get_footer();?>
