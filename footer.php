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
			<div class="row justify-content-between">
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
							<strong>Follow us :</strong>
							<div class="wt-footer-widget-list-footer">
								<a href="https://www.instagram.com/wunder.travel/">
									<i class="fab fa-instagram fa-3x"></i>
								</a>
								<a href="https://www.facebook.com/wundertravels/">
									<i class="fab fa-facebook fa-3x"></i>
								</a>
							</div>
							<!-- <ul>
								<li>instagram</li>
								<li>facebook</li>
								<li>twitter</li>
								<li>youtube</li>
							</ul> -->
						</div>
					</div>
				</div>
				<!-- <div class="col-xs-12 col-md-3">
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
				</div> -->
				<div class="col-xs-12 col-md-3">
					<div class="wt-footer-widget">
						<ul>
							<li><a href="https://play.google.com/store/apps/details?id=com.orfeostory.wunderlive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/appstore.svg" width="" height="" alt="" /></a></li>
							<li><a href="https://play.google.com/store/apps/details?id=com.orfeostory.wunderlive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/googleplay.svg" width="" height="" alt="" /></a></li>
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
