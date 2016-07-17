<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main main-wrapper">
		<div class="page-title-wrap row">
			<div class="vert-center-wrap">
				<div class="vert-center-content">
					<h1 class="page-title text-center">archive</h1>
				</div>
			</div>
		</div>
		<div class="row main-section news-wrap">
			<div class="container news-content">
				<div class="col-md-12  posts-wrap">
					<?php if ( have_posts() ) : ?>
	
						<div class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</div><!-- .page-header -->
	
					<?php while ( have_posts() ) : the_post();?>
						<?php get_template_part( 'template-parts/content', get_post_format() );?>
					<?php endwhile;?>
						<div class="blog-pagination">
							<div class="prev-link">
								<?php if(get_previous_posts_link()): ?> 
									<?php previous_posts_link('<i class="fa fa-angle-left"></i> Newer Posts'); ?>
									<?php else: ?>
										<div class="disabled">No Newer Posts</div>
								<?php endif; ?>
							</div><!-- .prev-link btn -->
							<div class="next-link">
								<?php if(get_next_posts_link()): ?> 
									<?php next_posts_link('Older Posts <i class="fa fa-angle-right"></i>'); ?>
									<?php else: ?>
										<div class="disabled">No Older Posts</div>
								<?php endif; ?>
							</div><!-- .next-link btn -->
						</div>
					<?php else : get_template_part( 'template-parts/content', 'none' );?>
					<?php endif; ?>
				</div>
			</div>
		</div>	
	</div><!-- #main -->

<?php
get_footer();
