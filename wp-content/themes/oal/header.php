<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/fb-share.jpg" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header class="main-header">
		<div class="pre-nav container-fluid">
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pull-left clearfix">
						<div class="logo" style="background-image: url('<?php bloginfo('template_url')?>/img/logo.svg');"></div>
					</a>
					
					<div class="menu-btn">
						<div class="menu-slice"></div>
						<div class="menu-slice"></div>
						<div class="menu-slice"></div>
					</div>
					<div class="phone-number">
						<a href="tel:2158055895" target="_blank">
							(215) 805 - 5895
						</a>
					</div>
					<div class="header-contact pull-right clearfix"></div>
				</div>
			</div>
		</div>
		<nav class="main-menu container-fluid">
			<?php
				wp_nav_menu( 
					array(
						'theme_location' => false,
						'menu_class' => 'row nav-wrap',
						'container' => 'ul',
					)
				);
			?>
		</nav>
	</header>
		<!-- .site-header -->


