<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_theme
 */

?>

<div class="no-results not-found main-section">
	<div class="page-header">
		<h1 class="section-title text-center"><?php esc_html_e( 'Nothing Found', 'starter_theme' ); ?></h1>
		<div class="bar"></div>
	</div><!-- .page-header -->

	<div class="page-content container">
		<div class="col-md-12">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'starter_theme' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p class="text-center"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'starter_theme' ); ?></p>
			<?php
				get_search_form();

				else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'starter_theme' ); ?></p>
			<?php
				get_search_form();

			endif; ?>
		</div>
	</div><!-- .page-content -->
</div><!-- .no-results -->
