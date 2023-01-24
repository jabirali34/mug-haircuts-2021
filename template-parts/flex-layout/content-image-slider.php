
<section class="pb-60 content-image-slider" data-aos="fade-up">
  <div class="container alternating-page-layout image-slider">
    
    <?php
      //Repeater
      if( have_rows('images') ):
        while( have_rows('images') ): the_row();

        ?>
          <div class="slide">
            
                <?php  $image = get_sub_field('image') ?>
                <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="">
          
          </div>
  
        <?php 
        endwhile;
      endif;
      ?>
   
  </div>
</section>

