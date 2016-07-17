<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter_theme
 */

?>

<div class="row post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container post-wrap">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<div class="entry-meta">
			<p><strong><em><?php the_date();?>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<span><?php the_time();?></span>&nbsp;&nbsp;&middot;&nbsp;&nbsp;<?php the_author();?></em></strong></p>
		</div>
		<?php if(has_post_thumbnail()):?>
			<div class="featured-image" style="background-image: url('');">
				<?php the_post_thumbnail();?>
			</div>
		<?php endif;?>
		<div class="entry-content">
			<?php the_excerpt();?>
		</div>
	</div>
</div><!-- #post-## -->
