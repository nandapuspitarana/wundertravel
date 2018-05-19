<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wundertravel
 */

get_header();
?>

	<div id="primary" class="wt-wrapper-blog content-area">
		<main id="main" class="site-main">
			<div class="wt-archive-heading">
				<header class="page-header">
					<?php printf( esc_html__( 'Search Results for: %s', 'wundertravel' ), '<h1 class="page-title">' . get_search_query() . '</h1>' ); ?>
				</header>
			</div>
			<div class="wt-archive">
				<div class="container">
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
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
