<?php
/**
 * Template Name: Services Page Template
 */

get_header(); ?>

	<div id="main" class="main-wrapper">
		<div class="page-title-wrap row">
			<div class="vert-center-wrap">
				<div class="vert-center-content">
					<h1 class="page-title text-center"><?php the_title();?></h1>
				</div>
			</div>
		</div>
		<div class="row page-nav">
			<div class="container page-nav-wrap">
				<div class="vert-center-wrap">
					<div class="vert-center-content">
						<ul class="service-nav">
							<li class="service-nav-btn" data-loc="staging">home staging</li>
							<li class="service-nav-btn" data-loc="relocating">relocating</li>
							<li class="service-nav-btn" data-loc="transitioning">transitioning</li>
							<li class="service-nav-btn" data-loc="consulting">consulting</li>
							<li class="service-nav-btn" data-loc="speaking">speaking</li>
							<li class="service-nav-btn" data-loc="events">event managment</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php if(have_rows('services')): while(have_rows('services')): the_row('services');
			$serviceTitle = get_sub_field('service_title');
			$serviceInfo = get_sub_field('service_info');
			$slideName = get_sub_field('slide_name');
		?>
		<div class="row main-section service" id="<?php echo $slideName;?>">
			<div class="container">
				<div class="col-md-6 service-slides-wrap ">
					<?php if(have_rows('service_images')):?>
						<div class="service-slides <?php echo $slideName;?>" >
							<?php while(have_rows('service_images')): the_row('service_images');
								$serviceImage = get_sub_field('service_image');
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
							<h1><?php echo $serviceTitle; ?></h1>
							<p><?php echo $serviceInfo; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; endif;?>
		<?php include('callout.php');?>
	</div>
<?php get_footer();?>
