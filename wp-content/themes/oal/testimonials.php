<?php
/**
 * Template Name: Testimonials Page Template
 */

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
		<?php 
			$args = array('post_type' => 'Testimonial','posts_per_page' => -1, 'order' => 'ASC');
			$testimonials = new WP_Query( $args );	
		?>
		<?php if($testimonials->have_posts()): while( $testimonials->have_posts()): $testimonials->the_post();
			$clientName = get_field('client_name');
			$testimonial= get_field('testimonial');
			$clientTitle = get_field('client_title');
		?>
		<div class="row main-section testimonial">
			<div class="col-md-12 testimonial-wrap">
				<h3><?php echo $clientName;?></h3>
				<strong><em> <?php echo $clientTitle;?></em> </strong>
				<p><?php echo $testimonial;?></p>
			</div>
		</div>
		<?php endwhile; endif; wp_reset_postdata();?>
	</div>
<?php include('callout.php');?>
<?php get_footer();?>
