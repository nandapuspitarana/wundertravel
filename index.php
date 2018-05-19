<?php
/**
 * The main template file
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

get_header();
?>

	<div id="primary" class="wt-wrapper-blog content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="wt-latest-post-wrapper">
					<div class="row">
						<div class="col">
							<div class="wt-align-center">
								<span class="wt-latest-post-heading">Latest Posts <img src="<?php echo get_site_url() . '/wp-content/themes/wundertravel/assets/images/wave-hand.svg'; ?>"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">

					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								echo "<div class='col-xs-12 col-md-4'>";

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_type() );

								echo '</div>';

							endwhile;

							echo "<div class='col'>";
							echo '<div class="wt-pagination">';
							wp_pagenavi();
							echo '</div>';
							echo '</div>';

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
					?>

				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
