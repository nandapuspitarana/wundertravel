<?php

/**
 * Template Name: Destination Page
 * Template Post Type: page, destinations
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wundertravel
 */

get_header('single-post');
?>
    <header id="masthead" class="wt-wrapper-hero-single site-header" style="background: linear-gradient(to bottom,  rgba(0, 10, 0, 0.253) 0%,  rgba(0, 10, 0, 0.37) 100%), url(<?php the_post_thumbnail_url('full'); ?>) no-repeat center center fixed; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-md navbar-light bg-light wt-navbar" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a href="/blog" class="wt-link-logo-header" alt="wunder travel"
								style="background: url(https://www.wundertravel.co/wp-content/themes/wundertravel/assets/images/logo-header.png) no-repeat center center;
								background-size:cover;">
								wunder travel
							</a>
							<i class="fas fa-search"></i>
							<span class="wt-search-divider"></span>
							<form role="search" method="get" class="search-form wt-search-form" action="<?php echo home_url('/'); ?>">
								<label>
									<span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
									<input type="search" class="search-field"
										placeholder="<?php echo esc_attr_x('Where do I want to go...', 'placeholder') ?>"
										value="<?php echo get_search_query() ?>" name="s"
										title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
								</label>
							</form>
							<?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'depth' => 2,
                                    'container' => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id' => 'bs-example-navbar-collapse-1',
                                    'menu_class' => 'nav navbar-nav ml-auto',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker()
                                ));
                            ?>
						</div>
					</nav>
				</div>
			</div>
        </div>
        
		<div class="wt-single-post-title">
            <h1><?php the_title(); ?></h1>
            <p><?php 
                // Grab CMB2 value and display it
                $slogan = get_post_meta( get_the_ID(), 'cmb2wunder_textmedium', true );
                echo esc_html( $slogan );
            ?></p>
		</div>

    </header><!-- #masthead -->
    
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="wt-destination-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- TABS -->
                            <div class="wt-tabs text-center">
                                <ul class="nav wt-ul-tabs nav-pills mx-auto mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-accomodation-tab" data-toggle="pill" href="#pills-accomodation" role="tab" aria-controls="pills-accomodation" aria-selected="true">Accomodation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-food-drink-tab" data-toggle="pill" href="#pills-food-drink" role="tab" aria-controls="pills-food-drink" aria-selected="false">Food and Drink</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-adventure-tab" data-toggle="pill" href="#pills-adventure" role="tab" aria-controls="pills-adventure" aria-selected="false">Adventure</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-airport-tab" data-toggle="pill" href="#pills-airport" role="tab" aria-controls="pills-airport" aria-selected="false">Airport Transport</a>
                                    </li>
                                </ul>
                                <hr id="wt-destination-tabs-hr" />
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- TABS CONTENT --> 
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-accomodation" role="tabpanel" aria-labelledby="pills-accomodation-tab">
                        <div class="container">    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wt-tabs-heading-wrapper">
                                        <h3>Accomodation <i class="fas fa-bed"></i></h3>
                                        <p>Lorem ipsum dolor amet bitters ugh roof party thundercats kitsch pabst. Plaid twee brunch biodiesel austin live-edge squid small batch actually raw denim artisan humblebrag.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php

                                global $post;
                                $post_type = get_post_type();
                                
                                if ( $post_type )
                                {
                                    $post_type_data = get_post_type_object( $post_type );
                                    $post_type_slug = $post_type_data->rewrite['slug'];
                                    $post_type_slug_all = $post_slug=$post->post_name;
                                    // echo $post_type_slug . '/' . $post_type_slug_all ;
                                }
                                
                                $the_query = new WP_Query(array( // Create new loop "object" with name worksQuery
                                    'category_name' => 'accomodation',// Fetch post type number
                                    'posts_per_page' => 9, // Fetch from "Works" post type
                                    'tag' => $post_type_slug_all, // Fetch based on single tag
                                ));

                                /* Start the Loop */
                                if ($the_query->have_posts()) :

                                /* Start the Loop */
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();

                                echo "<div class='col-xs-12 col-md-4'>";
                
                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_type());

                                echo '</div>';

                                endwhile;

                                else :

                                    echo '<div class="container">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-12">';
                                    echo '<div align="center">';

                                    get_template_part('template-parts/content', 'none');

                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';

                                endif;

                                wp_reset_postdata();

                                ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $categories = get_the_category();

                                    if (!empty($categories)) {
                                        echo '<div class="wt-destination-category">More from <a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="wt-category-destination">' . esc_html($categories[0]->name) . '</a></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-food-drink" role="tabpanel" aria-labelledby="pills-food-drink-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wt-tabs-heading-wrapper">
                                        <h3>Food and Drink <i class="fas fa-utensils"></i></h3>
                                        <p>Lorem ipsum dolor amet bitters ugh roof party thundercats kitsch pabst. Plaid twee brunch biodiesel austin live-edge squid small batch actually raw denim artisan humblebrag.</p>
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <?php

                                global $post;
                                $post_type = get_post_type();

                                if ( $post_type )
                                {
                                    $post_type_data = get_post_type_object( $post_type );
                                    $post_type_slug = $post_type_data->rewrite['slug'];
                                    $post_type_slug_all = $post_slug=$post->post_name;
                                    // echo $post_type_slug . '/' . $post_type_slug_all ;
                                }

                                $the_query = new WP_Query(array( // Create new loop "object" with name worksQuery
                                    'category_name' => 'food-drink',// Fetch post type number
                                    'posts_per_page' => 9, // Fetch from "Works" post type
                                    'tag' => $post_type_slug_all, // Fetch based on single tag
                                ));


                                /* Start the Loop */
                                if ($the_query->have_posts()) :

                                /* Start the Loop */
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();

                                echo "<div class='col-xs-12 col-md-4'>";
                
                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_type());

                                echo '</div>';

                                endwhile;

                                else :

                                    
                                    echo '<div class="container">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-12">';
                                    echo '<div align="center">';

                                    get_template_part('template-parts/content', 'none');

                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';

                                endif;

                                wp_reset_postdata();

                                ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $categories = get_the_category();

                                    if (!empty($categories)) {
                                        echo '<div class="wt-destination-category">More from <a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="wt-category-destination">' . esc_html($categories[0]->name) . '</a></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-adventure" role="tabpanel" aria-labelledby="pills-adventure-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wt-tabs-heading-wrapper">
                                        <h3>Adventure <i class="fas fa-map-signs"></i></h3>
                                        <p>Lorem ipsum dolor amet bitters ugh roof party thundercats kitsch pabst. Plaid twee brunch biodiesel austin live-edge squid small batch actually raw denim artisan humblebrag.</p>
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <?php

                                global $post;
                                $post_type = get_post_type();

                                if ( $post_type )
                                {
                                    $post_type_data = get_post_type_object( $post_type );
                                    $post_type_slug = $post_type_data->rewrite['slug'];
                                    $post_type_slug_all = $post_slug=$post->post_name;
                                    // echo $post_type_slug . '/' . $post_type_slug_all ;
                                }

                                $the_query = new WP_Query(array( // Create new loop "object" with name worksQuery
                                    'category_name' => 'adventure',// Fetch post type number
                                    'posts_per_page' => 9, // Fetch from "Works" post type
                                    'tag' => $post_type_slug_all, // Fetch based on single tag
                                ));


                                /* Start the Loop */
                                if ($the_query->have_posts()) :

                                /* Start the Loop */
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();

                                echo "<div class='col-xs-12 col-md-4'>";

                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                get_template_part('template-parts/content', get_post_type());

                                echo '</div>';

                                endwhile;

                                else :

                                    
                                    echo '<div class="container">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-12">';
                                    echo '<div align="center">';

                                    get_template_part('template-parts/content', 'none');

                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';

                                endif;

                                wp_reset_postdata();

                                ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $categories = get_the_category();

                                    if (!empty($categories)) {
                                        echo '<div class="wt-destination-category">More from <a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="wt-category-destination">' . esc_html($categories[0]->name) . '</a></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-airport" role="tabpanel" aria-labelledby="pills-airport-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wt-tabs-heading-wrapper">
                                        <h3>Airport Transport <i class="fas fa-plane"></i></h3>
                                        <p>Lorem ipsum dolor amet bitters ugh roof party thundercats kitsch pabst. Plaid twee brunch biodiesel austin live-edge squid small batch actually raw denim artisan humblebrag.</p>
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <?php

                                global $post;
                                $post_type = get_post_type();

                                if ( $post_type )
                                {
                                    $post_type_data = get_post_type_object( $post_type );
                                    $post_type_slug = $post_type_data->rewrite['slug'];
                                    $post_type_slug_all = $post_slug=$post->post_name;
                                    // echo $post_type_slug . '/' . $post_type_slug_all ;
                                }

                                $the_query = new WP_Query(array( // Create new loop "object" with name worksQuery
                                    'category_name' => 'airport-transport',// Fetch post type number
                                    'posts_per_page' => 9, // Fetch from "Works" post type
                                    'tag' => $post_type_slug_all, // Fetch based on single tag
                                ));

                                /* Start the Loop */
                                if ($the_query->have_posts()) :

                                /* Start the Loop */
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();

                                echo "<div class='col-xs-12 col-md-4'>";

                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                get_template_part('template-parts/content', get_post_type());

                                echo '</div>';

                                endwhile;

                                else :

                                   
                                    echo '<div class="container">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-12">';
                                    echo '<div align="center">';

                                    get_template_part('template-parts/content', 'none');

                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';

                                endif;

                                wp_reset_postdata();

                                ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $categories = get_the_category();

                                    if (!empty($categories)) {
                                        echo '<div class="wt-destination-category">More from <a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="wt-category-destination">' . esc_html($categories[0]->name) . '</a></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
