<?php
  // Section Padding checkbox
  if (get_sub_field('full_width_testimonial_add_space') == 'Above'){
    $paddingClass = " pb-0";
  }
  elseif(get_sub_field('full_width_testimonial_add_space') == 'Below'){
    $paddingClass = " pt-0";
  }
  elseif(get_sub_field('full_width_testimonial_add_space') == 'Neither'){
    $paddingClass = " pb-0 pt-0";
  }

?>
<section id="testimonials" class="py-80 <?php echo $paddingClass; ?>" data-aos="fade-up">
    <div class="container">
      <div class="row d-flex justify-content-center">

        <?php
        //Parent Group
        if( have_rows('testimonials_section_flex') ):
          while( have_rows('testimonials_section_flex') ): the_row();
            if (get_sub_field('testimonial_section_title')){
        ?>
        <div class="col-12 d-flex justify-content-center align-items-center text-center">
          <h2 class="mt-0 mb-80 font-weight-bold"><?php echo get_sub_field('testimonial_section_title'); ?></h2>
        </div>
        <?php
            }
            //Child Repeater
            if ( have_rows( 'testimonials' ) ) : 
              while ( have_rows( 'testimonials' ) ) : the_row();
      ?>
        <div class="col-12 col-md-10 col-lg-8 mb-4 testimonial-column">
          <div class="testimonial-container bg-gray">
            <div class="testimonial-title-wrapper d-flex">
                <span class="testimonial-color-bg-<?php echo get_row_index(); ?>"><?php echo the_sub_field('testimonial_name_initial');?></span>
              <div class="testimonial-title text-left">
                <p class="font-weight-bold;"><?php echo the_sub_field('testimonial_name'); ?></p>
                <img src="/wp-content/uploads/2019/08/five-stars.png" alt="5 out of 5 star testimonial">
              </div>
            </div>
            <p class="testimonial-text mb-0"><?php echo the_sub_field('testimonial_text'); ?></p>
          </div>
        </div>
      <?php      
              endwhile;
            endif;

          endwhile;
        endif;
      ?>

        <div>
      </div>
    </div> <!-- end of container -->
  </section>