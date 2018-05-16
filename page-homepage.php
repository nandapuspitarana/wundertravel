<?php
/**
 * Template Name: Homepage/Landing Page
 * The main template file
 * 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wundertravel
 */

get_header('homepage');
?>

<section id="hero">
	<header id="masthead" class="wt-wrapper-hero-homepage site-header">
		<div class="container-custom-2">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light wt-navbar">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-header.png" width="" height="" alt="" class="wt-logo-header"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="/blog" style="opacity: 1; font-weight: 700;">BLOG</a>
								</li>
							</ul>
						</div>
					</nav>
					<div class="row wt-hero-homepage-content">
						<div class="col-xs-12 col-md-6">
							<div class="wt-hero-homepage-heading">
								<h2 class="animated fadeInLeft">The start of your next adventure</h2>
								<p class="animated fadeInRight">
									Uncover more, experience more
									source for your next travel inspiration
									seek unforgetable holiday memories
								</p>
								<p>
									<ul class="animated fadeIn">
										<li><a href="https://play.google.com/store/apps/details?id=com.orfeostory.wunderlive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/appstore.svg" width="" height="" alt="" /></a></li>
										<li><a href="https://play.google.com/store/apps/details?id=com.orfeostory.wunderlive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/googleplay.svg" width="" height="" alt="" /></a></li>
									</ul>
								</p>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="wt-hero-homepage-gif">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-1.gif" />
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </header><!-- #masthead -->
</section>

<hr class="wt-homepage-hr" />

<section id="uncover">
	<div class="wt-homepage-uncover">
		<div class="container-custom-2">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="wt-uncover-left">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-2.gif" />
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="wt-uncover-right">
						<h2 class="animated fadeInLeft">Uncover</h2>
						<ul class="animated fadeIn">
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/uncover-1.svg" /></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/uncover-2.svg" /></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/uncover-3.svg" /></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/uncover-4.svg" /></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/uncover-5.svg" /></li>
						</ul>
						<p class="animated fadeInRight">
							The best landmark to see, things to do, and places to visit
							Along with the best travel providers to perfect your holiday
							Both with smooth interaction, both in one click away.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<hr class="wt-homepage-hr" />

<section id="experience">
	<div class="wt-homepage-exp">
		<div class="">
			<div class="row no-gutters">
				<div class="col-xs-12 col-md-4">
					<div class="wt-exp-left">
						<h3 class="animated fadeIn">Experience</h3>
						<div class="wt-homepage-exp-icon animated fadeInLeft">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exp-1.png" />
							<p>Never miss out any single detail</p>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exp-2.png" />
							<p>Never miss out any single detail</p>
						</div>				
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="wt-exp-middle">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-3.gif" />
					</div>
					<!-- <div class="verticalLine"></div> -->
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="wt-exp-right">
						<h3>experience</h3>
						<div class="wt-homepage-exp-icon animated fadeInRight">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exp-3.png" />
							<p>Never miss out any single detail</p>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exp-4.png" />
							<p>Never miss out any single detail</p>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<hr class="wt-homepage-hr" />

<section id="stats">
	<div class="wt-homepage-stats">
		<div class="container-custom-2">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="wt-stats-left">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stats-1.png" />
						<h3>10k+</h3>
						<p>Bookings made by Wunder!</p>
					</div>
				</div>
				<div class="verticalLine-2"></div>
				<div class="col-xs-12 col-md-6">
					<div class="wt-stats-right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stats-2.png" />
						<h3>100k+</h3>
						<p>Happy Wunderers!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<hr class="wt-homepage-hr" />

<section id="lastcta">
	<div class="wt-homepage-lastcta">
		<div class="container-custom-2">
			<div class="row">
				<div class="col-md-12">
					<div class="wt-lastcta">
						<h3>Ready for your next adventure? <br />
						Download Wunder travel today!</h3>
						<div class="wt-app-download">
							<ul>
								<li><a href="https://play.google.com/store/apps/details?id=com.orfeostory.wunderlive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/appstore.svg" width="" height="" alt="" /></a></li>
								<li><a href="https://play.google.com/store/apps/details?id=com.orfeostory.wunderlive"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/googleplay.svg" width="" height="" alt="" /></a></li>
							</ul>
						</div>
						<div class="wt-wave-hand">
							<p>hello@wundertravel.co <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wave-hand.svg"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
// get_sidebar();
get_footer();
