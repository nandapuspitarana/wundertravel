<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wundertravel
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="wt-footer-wrapper site-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<div class="wt-footer-widget">
						<h3><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.svg" width="" height="" alt="" /></a></h3>
						<p id="wt-footer-slogan">Better place to discover and share<br />beautiful travel inspiration</p>
						<p>Made with <i class="fas fa-heart" id="wt-heart"></i> from Singapore</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="wt-footer-widget">
						<div class="wt-footer-widget-list">
							<strong>Follow us</strong>
							<ul>
								<li>Instagram</li>
								<li>Facebook</li>
								<li>Twitter</li>
								<li>Youtube</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="wt-footer-widget">
						<div class="wt-footer-widget-list">
							<strong>Wundertravel</strong>
							<ul>
								<li>Contact Us</li>
								<li>About Us</li>
								<li>Help</li>
								<li>FAQ</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="wt-footer-widget">
						<ul>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/appstore.svg" width="" height="" alt="" /></a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/googleplay.svg" width="" height="" alt="" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	feather.replace()
</script>

</body>
</html>
