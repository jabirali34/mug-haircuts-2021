<?php
/**
 * The template for displaying pages that use flexible layouts
 * Template Name: Flexible Layout Page
 *
 * @package start-theme
 */

get_header(); ?>

<!-- Page Title Section-->
<?php get_template_part( 'template-parts/content-page-title' ); ?>
<?php //get_template_part('template-parts/content-global-notice'); ?>
<div class="brown-bg" style="width: 100%; height: 15px; display: block;"></div>


<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php

    // Check value exists.
    if( have_rows('main_flex_layout') ):

        // Loop through rows.
        while ( have_rows('main_flex_layout') ) : the_row();

            
            if( get_row_layout() == '5050_text_text' ):
              get_template_part( 'template-parts/flex-layout/content-5050-text-text' ); 

            elseif( get_row_layout() == '5050_text_image' ):
              get_template_part( 'template-parts/flex-layout/content-5050-text-image' ); 

            elseif( get_row_layout() == '5050_text_form' ):
              get_template_part( 'template-parts/flex-layout/content-5050-text-form' ); 

            elseif( get_row_layout() == 'full_width_text' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-text' ); 

            elseif( get_row_layout() == 'full_width_testimonials' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-testimonial' ); 

            elseif( get_row_layout() == 'full_width_accordion' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-accordion' );

            elseif( get_row_layout() == 'mid_page_cta_layout' ):
              get_template_part( 'template-parts/flex-layout/content-mid-page-cta' );

            elseif( get_row_layout() == 'mid_page_cta_layout' ):
              get_template_part( 'template-parts/flex-layout/content-mid-page-cta' );
            
            elseif( get_row_layout() == '5050_book_location_cta_layout' ):
              get_template_part( 'template-parts/flex-layout/content-5050-book-location-cta' );
            
            elseif( get_row_layout() == 'store_location_information' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-store-location-information' );

            elseif( get_row_layout() == 'mug_service_menu' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-mug-service-menu' );

            elseif( get_row_layout() == 'mug_services_menu_extended' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-mug-services-menu-extended' );

            elseif( get_row_layout() == 'location_main_content' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-location-main-content' );
            
            elseif( get_row_layout() == 'fullwidth_book_location_cta_layout' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-book-location-cta' );
            
            elseif( get_row_layout() == 'full_width_woodlees_products_row' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-woodlees-products-row' );

            elseif( get_row_layout() == 'find_a_location_cta' ):
              get_template_part( 'template-parts/flex-layout/content-full-width-find-a-location-cta' );
            
            elseif( get_row_layout() == 'image_slider' ):
              get_template_part( 'template-parts/flex-layout/content-image-slider' );
                
          endif;

      // End loop.
      endwhile;

  // No value.
  else :

  endif;
  ?>
  <!-- Social Feed -->
  <?php //signa_select_social(); ?>


</article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>