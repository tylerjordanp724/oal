<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main main-wrapper">
		<div class="page-title-wrap row">
			<div class="vert-center-wrap">
				<div class="vert-center-content">
					<h1 class="page-title text-center">Search Results</h1>
				</div>
			</div>
		</div>

	<?php
	if ( have_posts() ) : ?>

		<div class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'starter_theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</div><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();
			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );
		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</div><!-- #main -->

<?php
get_footer();
