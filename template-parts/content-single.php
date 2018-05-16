<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wundertravel' ); ?></a>

	<header id="masthead" class="wt-wrapper-hero-single site-header" style="background: linear-gradient(to bottom,  rgba(0, 10, 0, 0.253) 0%,  rgba(0, 10, 0, 0.37) 100%), url(<?php the_post_thumbnail_url( 'full' ); ?>) no-repeat center center fixed; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-md navbar-light bg-light wt-navbar" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-header.png" width="" height="" alt="" class="wt-logo-header">
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
        
		<div class="wt-single-post-title">
            <p>
                <div class="wt-single-post-category">
                    <?php 
                        $categories = get_the_category();
    
                        if ( ! empty( $categories ) ) {
                            echo esc_html( $categories[0]->name );   
                        }
                    ?>  
                </div>
            </p>
			<h1><?php the_title(); ?></h1>
			<p><?php the_date(); ?></p>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="wt-single-post-content-wrapper">
        <div class="container-custom-narrow">
            <div class="row">
                <div class="col-md-12">
                    <div class="wt-single-post-content">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
                                <?php
                                the_content( sprintf(
                                    wp_kses(
                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    get_the_title()
                                ) );
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                                    'after'  => '</div>',
                                ) );
                                ?>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer">
                                <?php // wundertravel_entry_footer(); ?>
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-<?php the_ID(); ?> -->
                        
                        <!-- Display tags --> 

                        <?php

                        $post_tags = get_the_tags();
                        
                        if ( $post_tags ) {
                            foreach( $post_tags as $tag ) {
                            echo '<div class="post_tags">';
                            echo '<span class="wt-tags">' . $tag->name . '</span>'; 
                            echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>