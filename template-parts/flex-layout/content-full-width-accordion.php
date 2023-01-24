<?php
  // Section Padding checkbox
  if (get_sub_field('full_width_accordion_add_space') == 'Above'){
    $paddingClassAccordion = " pb-0";
  }
  elseif(get_sub_field('full_width_accordion_add_space') == 'Below'){
    $paddingClassAccordion = " pt-0";
  }
  elseif(get_sub_field('full_width_accordion_add_space') == 'Neither'){
    $paddingClassAccordion = " pb-0 pt-0";
  }

?>


<section class="py-80 <?php echo $paddingClassAccordion; ?>" data-aos="fade-up">
  <div class="container alternating-page-layout">
    <div class="row">

      <div class="col-md-12">
          <?php
            if( have_rows('accordion') ):
              while( have_rows('accordion') ): the_row();
              $rowCount = get_row_index();
          ?>
          <button class="accordion"><h3><?php echo get_sub_field('accordion_display_text'); ?></h3></button>
          <div class="panel">
            <div class="panel-padding">
              <?php echo get_sub_field('accordion_hidden_text'); ?>
            </div>
          </div>


                
          <?php
              endwhile;
            endif;
          ?>
      </div>

    </div>
  </div>
</section>