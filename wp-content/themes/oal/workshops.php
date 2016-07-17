<?php
/**
 * Template Name: Workshops Page Template
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
		<?php 
			$args = array('post_type' => 'Workshop','posts_per_page' => -1, 'order' => 'ASC');
			$workshops = new WP_Query( $args );	
		?>
		<?php if($workshops->have_posts()): while( $workshops->have_posts()): $workshops->the_post();
			$videoDescription = get_field('video_description');
		?> 
			<div class="row main-section">
				<div class="col-md-6 workshop-video">
					<?php the_field('workshop_video');?>
				</div>
				<div class="col-md-6 workshop-text">
					<div class="vert-center-wrap">
						<div class="vert-center-content">
							<h1><?php the_title();?></h1>
							<p><?php echo $videoDescription;?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; endif; wp_reset_postdata();?>
	</div>
<?php include('callout.php');?>

<?php get_footer();?>
