<?php
/**
 * Template Name: Resources Template Page
 *
 * 
 */
$workshops = get_field('videos');
get_header(); ?>

	<div id="main" class="main-wrapper">
		<div class="page-title-wrap row">
			<div class="vert-center-wrap">
				<div class="vert-center-content">
					<h1 class="page-title text-center"><?php the_title();?></h1>
				</div>
			</div>
		</div>
		<div class="row main-section">
			<div class="container">
				<div class="col-md-12">
					<h1 class="text-center">Forms</h1>
					<div class="bar"></div>
					<?php if(have_rows('forms')): while(have_rows('forms')): the_row();
						$formName = get_sub_field('form_name');
						$form = get_sub_field('form');
					?>
						<div class="form">
							<div class="vert-center-wrap">
								<div class="vert-center-content">
									<a href="<?php echo $form;?>" target="_blank"><?php echo $formName;?><br/>
										<span>download <i class="fa fa-download" aria-hidden="true"></i></span>
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; endif;?>
				</div>
			</div>
		</div>
		<div class="row main-section">
			<div class="container">
				<div class="col-md-12">
					<h1 class="text-center">Featured Videos</h1>
					<div class="bar"></div>
					<div class="featured-videos">
						<?php if($workshops): foreach($workshops as $post): setup_postdata($post);?>
						<div class="featured-video col-md-4">
							<?php the_field('workshop_video')?>
							<h4><?php the_title();?></h4>
						</div>
						<?php endforeach; endif; wp_reset_postdata();?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('callout.php');?>
<?php get_footer();?>
