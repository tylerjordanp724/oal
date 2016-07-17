<?php
/**
 * Template Name: Services Page Template
 */

get_header(); ?>
	<?php 
		$args = array('post_type'=>'Service', 'posts_per_page'=> 999, 'order'=>'ASC');
		$services = get_posts($args);
	?>
	<div id="main" class="main-wrapper">
		<div class="hero-wrap row">
			<div class="hero-slides">
				<?php if(have_rows('hero_images')): while(have_rows('hero_images')): the_row();
					$heroImage = get_sub_field('hero_image');
				?>
					<div class="slide" style="background-image: url('<?php echo $heroImage;?>');"></div>
				<?php endwhile; endif;?>
			</div>
			<div class="hero-title">
				<div class="vert-center-wrap">
					<div class="vert-centr-content">
						<h1 class="page-title text-center"><?php the_title();?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row page-nav">
			<div class="container page-nav-wrap">
				<div class="vert-center-wrap">
					<div class="vert-center-content">
						<ul class="service-nav">
							<li class="service-nav-btn" data-loc="home-staging">home staging</li>
							<li class="service-nav-btn" data-loc="relocating">relocating</li>
							<li class="service-nav-btn" data-loc="transitioning">transitioning</li>
							<li class="service-nav-btn" data-loc="consulting">consulting</li>
							<li class="service-nav-btn" data-loc="speaking">speaking</li>
							<li class="service-nav-btn" data-loc="event-management">event managment</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php foreach ( $services as $post ) : setup_postdata( $post );?>
			<div class="row main-section service" id="<?php echo the_slug();?>">
				<div class="container">
					<div class="col-md-6 service-slides-wrap ">
						<?php if(have_rows('service_images')):?>
							<div class="service-slides <?php echo the_slug();?>" >
								<?php while(have_rows('service_images')): the_row('service_images');
									$serviceImage = get_sub_field('service_photo');
									$serviceInfo = get_field('service_info');
								?>
								<div class="service-image" style="background-image: url('<?php echo $serviceImage?>');"></div>
								<?php endwhile;?>
							</div>
						<?php endif;?>
						<div class="slide-nav">
							<div class="slide-btn prev-btn">
								<i class="fa fa-angle-left"></i>
							</div>
							<div class="slide-btn next-btn">
								<i class="fa fa-angle-right"></i>
							</div>
						</div>
					</div>
					<div class="col-md-6 service-info-wrap">
						<div class="vert-center-wrap">
							<div class="vert-center-content">
								<h1><?php the_title();?></h1>
								<p><?php echo $serviceInfo?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; wp_reset_postdata();?>
		<?php include('callout.php');?>
	</div>
<?php get_footer();?>
