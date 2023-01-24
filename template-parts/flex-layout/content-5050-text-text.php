<?php
// Section Padding checkbox
if (get_sub_field('5050_text_text_add_space') == 'Above'){
  $paddingClass = " pb-0";
}
elseif(get_sub_field('5050_text_text_add_space') == 'Below'){
  $paddingClass = " pt-0";
}

?>

<section class="py-80 <?php echo $paddingClass; ?>" data-aos="fade-up">
  <div class="container alternating-page-layout">
  <?php
    //Repeater
    if( have_rows('5050_text_text_repeater') ):
      while( have_rows('5050_text_text_repeater') ): the_row();
  ?>
    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
        <?php echo get_sub_field('text_text_1'); ?>
      </div>
      <div class="col-md-6">
      <?php echo get_sub_field('text_text_2'); ?>
      </div>
    </div>
  <?php
      endwhile;
    endif;
  ?>
  </div>
</section>