<?php
/**
 * Template Name: About Page Template
 */
$aboutPhoto1 = get_field('about_photo_1');
$aboutPhoto2 = get_field('about_photo_2');
$aboutMe = get_field('about_me');
$whyYasmin = get_field('why_yasmin');
get_header(); ?>

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
		<div class="row main-section">
			<div class="container">
				<h1 class="text-center">About Me</h1>
				<div class="bar"></div>
				<div class="about-wrapper">
					<div class="col-md-6 about-photo about-photo-1" style="background-image: url('<?php echo $aboutPhoto1;?>');"></div>
					<div class="col-md-6 about-text about-me">
						<p><?php echo $aboutMe;?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row main-section">
			<div class="container">
				<h1 class="text-center">Why Yasmin?</h1>
				<div class="bar"></div>
				<div class="about-wrapper">
					<div class="col-md-6 about-photo about-photo-2"style="background-image: url('<?php echo $aboutPhoto2;?>');"></div>
					<div class="col-md-6 about-text why-yasmin">
						<p><?php echo $whyYasmin;?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('callout.php');?>
<?php get_footer();?>
