<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wundertravel
 */

get_header('404');
?>

	<div id="primary" class="content-area wt-404-wrapper">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					
					<section class="error-404 not-found wt-404-heading">
						<header class="page-header">
							<h1>404</h1>
							<h2 class="page-title"><?php esc_html_e( 'Oops! Are you lost?', 'wundertravel' ); ?></h2>
						</header><!-- .page-header -->

						<div class="page-content wt-404-back-button">
							<a href="/">&#60; Back to homepage</a>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
	
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_footer();
