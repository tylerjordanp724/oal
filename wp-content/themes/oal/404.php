<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package starter_theme
 */

get_header(); ?>

	<div id="main" class="site-main">

		<div class="error-404 not-found">
			<div class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'starter_theme' ); ?></h1>
			</div><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'starter_theme' ); ?></p>

				<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );

					if ( starter_theme_categorized_blog() ) : // Only show the widget if site has multiple categories.
				?>

				<div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'starter_theme' ); ?></h2>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div><!-- .widget -->

				<?php
					endif;

					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'starter_theme' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
				?>

			</div><!-- .page-content -->
		</div><!-- .error-404 -->

	</div><!-- #main -->

<?php
get_footer();
