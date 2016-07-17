<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_theme
 */

?>


	<footer class="site-footer row">
		<div class="footer-content">
			<div class=" container">
				<div class="col-md-12">
					<div class="vert-center-wrap">
						<div class="vert-center-content">
							<div class="text-center">
								<strong>Organized At Last, LLC</strong><br/>
								<a href="tel:215-805-5895">(215) 805 - 5895</a><br/>
								Copyright &copy; <?php echo date('Y'); ?>
							</div>
							<!-- <div class="site-credit pull-right clearfix">
								site by <a href="http://tylerjordandesign.com" target="_blank">Tyler Jordan Design</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-credit text-center">
			<div class="vert-center-wrap">
				<div class="vert-center-content">
					site by <a href="http://tylerjordandesign.com" target="_blank">Tyler Jordan Design</a>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
