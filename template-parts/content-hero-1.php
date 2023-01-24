<?php
/**
 * Template part for displaying Hero Text.
 *
 * @package start-theme
 */

//vars
$hero = get_field('hero_section');
$hero_bg = $hero['hero_background'];
?>

<section id="hero" class="bg-hero padding-hero py-5 py-md-3 hero-2 d-flex align-content-center justify-content-center align-items-center" style="background-image:url('<?php echo $hero_bg['hero_background_image']; ?>')" data-aos="fade-up">
      <!-- Desktop Video -->
    <?php 
      if ($hero_bg['hero_background_video']){
          if(!is_mobile_device()){
    ?>
    <div class="banner-video">
      <div class="homepage-video-container">

          <video muted autoplay loop class="homepage-video">
            <source src="<?php echo $hero_bg['hero_background_video']; ?>" type="video/mp4">
          </video>

      </div>
    </div>
    <?php 
       }
      }
    ?>
    <div id="bg-filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 offset-md-1 text-center hero-title-margin-bottom">
          <h1 class=""><?php echo $hero['hero_title']; ?></h1>
          <?php echo $hero['hero_text']; ?>
          <?php
            if( have_rows('hero_section') ):
              while( have_rows('hero_section') ): the_row();
              $hero_btn = get_sub_field('hero_button');
          ?>
              <a href="<?php echo $hero_btn['hero_button_link']; ?>" class="btn blue mt-0"><?php echo $hero_btn['hero_button_text']; ?></a>
          <?php      
              endwhile;
            endif;
          ?>

          

        </div>
      </div>
      
    </div>
    <a href="#anchor" id="anchor" class="icon-scroll-container">
          <div class='icon-scroll'></div>
          </a>
  </section>