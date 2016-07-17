<?php
/**
 * Template Name: Contact Page Template
 */
$contactHeadline = get_field('contact_headline');
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
			<div class="container contact-wrapper">
				<div class="col-md-12">
					<h1 class="section-title text-center">Get In Touch</h1>
					<div class="bar"></div>
					<p><?php echo $contactHeadline;?></p>
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="210" title="Contact form 1"]');?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
