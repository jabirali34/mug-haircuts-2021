<?php
  // Section Padding checkbox
  if (get_sub_field('full_width_text_add_space') == 'Above'){
    $paddingClass = " pb-0";
  }
  elseif(get_sub_field('full_width_text_add_space') == 'Below'){
    $paddingClass = " pt-0";
  }
  elseif(get_sub_field('full_width_text_add_space') == 'Neither'){
    $paddingClass = " pb-0 pt-0";
  }

?>
  <section class="py-80 <?php echo $paddingClass; ?>" data-aos="fade-up">
    <div class="container alternating-page-layout">
      <div class="row">
        <div class="col-md-12">
          <?php echo get_sub_field('full_width_text_1'); ?>
        </div>
      </div>
    </div>
  </section>