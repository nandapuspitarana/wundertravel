<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wundertravel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wundertravel' ); ?></a>

	<header id="masthead" class="wt-wrapper-hero site-header">
		<div class="container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-md navbar-light bg-light wt-navbar" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a href="/blog" class="wt-link-logo-header"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-header.png" width="" height="" alt="" class="wt-logo-header"></a>
							<i class="fas fa-search"></i>
							<span class="wt-search-divider"></span>
							<form role="search" method="get" class="search-form wt-search-form" action="<?php echo home_url( '/' ); ?>">
								<label>
									<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
									<input type="search" class="search-field"
										placeholder="<?php echo esc_attr_x( 'Where do I want to go...', 'placeholder' ) ?>"
										value="<?php echo get_search_query() ?>" name="s"
										title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
								</label>
							</form>
							<?php
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav ml-auto',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker()
								) );
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="wt-hero-heading">
			<h1>Look <i>Less</i>. Wander <b>More</b>.</h1>
			<p>Uncover more of your destination, create unforgetable experiences<br />and bring home life best memories.</p>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
