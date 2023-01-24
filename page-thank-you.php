<?php
/**
 * Template Name: Thank you page
 *
 * @package start-theme
 */

get_header(); ?>

  <!-- Page Title Section-->
  <?php get_template_part( 'template-parts/content-page-title-2'); ?>




<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url(/wp-content/uploads/2021/03/wood-bg-tall.jpg);">
    <section class="py-80">
      <div class="container alternating-page-layout">
            <div class="row">
                <div class="col-md-12 text-center">
                <div class="thank-you-text-wrapper" style="padding: 5% 11%;background-color: rgba(4, 4, 4, 0.8);">
                  <?= the_content(); ?>
                </div>
                </div>
              </div>
      </div>
    </section>

    <!-- Social Feed -->
    <?php signa_select_social(); ?>

  </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>