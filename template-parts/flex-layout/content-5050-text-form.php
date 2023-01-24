<?php
// Section Padding checkbox
if (get_sub_field('5050_text_form_add_space') == 'Above'){
  $paddingClass = " pb-0";
}
elseif(get_sub_field('5050_text_form_add_space') == 'Below'){
  $paddingClass = " pt-0";
}
?>


<section class="py-80 <?php echo $paddingClass; ?>" data-aos="fade-up">
  <div class="container alternating-page-layout">
    <div class="row">

      <?php
        if(get_sub_field('5050_text_form_reverse') == 'No'){
      ?>
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="text-form-5050">
            <?php echo get_sub_field('5050_text_form_1'); ?>
          </div>
        </div>
        <div class="col-md-6 p-0">
          <div class="form-wrapper">
        <?php

          // Group
          if( have_rows('5050_text_form_group') ):
            while( have_rows('5050_text_form_group') ): the_row();
              // Form Title
              if(get_sub_field('5050_text_form_title')){
                echo '<h3 class="h2 mt-0">'.get_sub_field('5050_text_form_title').'</h3>';
              }
              // Title Subtext
              if(get_sub_field('5050_text_form_title_subtext')){
                echo get_sub_field('5050_text_form_title_subtext');
              }
              // Form
              if(get_sub_field('5050_text_form_2')){
                $gravity_id = get_sub_field('5050_text_form_2'); 
                gravity_form( $gravity_id, false );
              }
            endwhile;
          endif;
        ?>
        </div>
      </div>
      <?php
        } else {
      ?>
        <div class="col-md-6 p-0">
          <div class="form-wrapper">
        <?php
          // Group
          if( have_rows('5050_text_form_group') ):
            while( have_rows('5050_text_form_group') ): the_row();
              // Form Title
              if(get_sub_field('5050_text_form_title')){
                echo '<h3 class="h2 mt-0">'.get_sub_field('5050_text_form_title').'</h3>';
              }
              // Title Subtext
              if(get_sub_field('5050_text_form_title_subtext')){
                echo get_sub_field('5050_text_form_title_subtext');
              }
              // Form
              if(get_sub_field('5050_text_form_2')){
                $gravity_id = get_sub_field('5050_text_form_2'); 
                gravity_form( $gravity_id, false );
              }
            endwhile;
          endif;
        ?>
        </div>
        </div>
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="text-form-5050">
            <?php echo get_sub_field('5050_text_form_1'); ?>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
  </div>
</section>