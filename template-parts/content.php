<?php
/**
 * Template part for displaying post card
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wundertravel
 */

?>
<a href="<?php the_permalink(); ?>">
    <div class="wt-blog-card-wrapper">
        <div class="wt-blog-content">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php // wundertravel_post_thumbnail(); ?>
                
                <div class="wt-index-post-image" style="background: url(<?php the_post_thumbnail_url( 'full' ); ?>) no-repeat center center; background-size: cover;">
                </div>

                <div class="wt-entry-content">
                    <div class="wt-category">
                        <?php 
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="wt-category-' . esc_html( $categories[0]->slug) . '">' . esc_html( $categories[0]->name ) . '</a>' . '<span class="wt-category-' . esc_html( $categories[0]->slug) . '"><i class="fas fa-circle wt-cat-icon"></i></span>';   
                            }
                        ?>
                    </div>
                    <header class="wt-entry-header">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    </header><!-- .entry-header -->
                </div><!-- .entry-content -->

            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    </div>
</a>