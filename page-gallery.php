<?php
/**
 * Template Name: Gallery Page
 *
 * @package start-theme
 */

get_header(); ?>

  <!-- Page Title Section-->
  <?php get_template_part( 'template-parts/content-page-title-2' ); ?>




<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <?php
      //vars
      $page_content_section = get_field('page_content');
    ?>
    <section class="py-80 gallery" data-aos="fade-up">
      <div class="container">
      <?php
        if (get_field('full_width_gallery_text')):
      ?>
        <row>
          <div class="col-12">
            <?php the_field('full_width_gallery_text');?>
          </div>
        </row>
      <?php
      endif;
      ?>
        <div class="row">
          <?php
              if(have_rows('gallery')):
                while (have_rows('gallery')): the_row();
            ?>
              <div class="col-12 col-md-3 text-center">
                <div class="gallery-item">
                  <?php 
                    $img = get_sub_field('image');
                    $img_url = $img['sizes']['gallery-img'];
                  ?>
                  <a href="<?php echo $img['url']; ?>" data-rel="lightcase:myCollection:slideshow">
                    <img class="b-lazy" data-src="<?php echo $img_url; ?>" alt="<?php echo $img['alt']; ?>"?>
                  </a>
                </div>
              </div>
            <?php
                endwhile;
              endif;
            ?>
        </div>
      </div>
    </section>

    <!-- Social Feed -->
    <?php signa_select_social(); ?>
    <?php
      //vars
      $cta = get_field('call_to_action_copy');
      if($cta):
    ?>
    <section class="py-80">
      <div class="container">
        <div class="row">


          <div class="col-12 col-lg-6 text-center text-lg-left">
            <h3 class="mt-0 mb-lg-0 cta-2-text"><?php echo $cta['text']; ?></h3>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
            <a class="btn blue cta" href="<?php echo $cta['button_link']; ?>" ><?php echo $cta['button_text']; ?></a>
          </div>
        </div>
      </div>
    </section>
    <?php
      endif;
    ?>


  </article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<!-- Lightbox jquery, js, css -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="/wp-content/themes/mug-haircuts-2021/js/lightcase-2.5.0/src/css/lightcase.css" rel="stylesheet" />
<script src="/wp-content/themes/mug-haircuts-2021/js/lightcase-2.5.0/src/js/lightcase.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase();
	});
</script>
<?php get_footer(); ?>