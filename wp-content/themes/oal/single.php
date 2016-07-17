<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="main-wrapper">
		<?php while ( have_posts() ) : the_post();?>
			<div class="page-title-wrap row">
				<div class="vert-center-wrap">
					<div class="vert-center-content">
						<h1 class="page-title text-center"><?php the_title();?></h1>
					</div>
				</div>
			</div>
			<div class="row main-section post-section">
				<div class="container">
					<div class="col-md-12">
						<div class="post-content">
							<div class="post-meta">
								<em><?php the_date();?>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<?php the_author();?></em></div>
							<p><?php the_content();?></p><br/>
							<div class="learn-more-btn">
								<a href="<?php echo get_site_url();?>/news">&larr; back to news</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		

		
		<?php endwhile;?>

	</div><!-- #main -->

<?php
get_footer();
