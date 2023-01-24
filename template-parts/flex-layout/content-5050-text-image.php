<?php
$paddingClass = "";
// Section Padding checkbox
if (get_sub_field('5050_text_image_add_space') == 'Above'){
  $paddingClass = " pb-0";
}
elseif(get_sub_field('5050_text_image_add_space') == 'Below'){
  $paddingClass = " pt-0";
}
$reverse = "";
if(get_sub_field('5050_text_image_reverse_layout') == 'No'){
  $reverse = "No";
}

?>

<section class="py-80 <?php echo $paddingClass; ?>" data-aos="fade-up">
  <div class="container alternating-page-layout">
    <?php
    //Repeater
    if( have_rows('5050_text_image_repeater') ):
      while( have_rows('5050_text_image_repeater') ): the_row();

      if($reverse == "No"){
        if( get_row_index() % 2 == 0 ){
          // this is an even row
    ?>
          <div class="row">
            <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
              <?php
                $image_text_image_element = get_sub_field('5050_text_image_image_col');
                $url = $image_text_image_element['url'];
                $alt = $image_text_image_element['alt'];

                echo '<img src="'.$url.'" alt="'.$alt.'">';
              ?>
            </div>
            <div class="col-md-6">
              <?php echo the_sub_field('5050_text_image_text_col'); ?>
            </div>
          </div>
        <?php    
          } else{
          // this is an odd row
        ?>
        <div class="row">
          <div class="col-md-6 order-2 order-md-1">
            <?php echo the_sub_field('5050_text_image_text_col'); ?>
          </div>
          <div class="col-md-6 text-center text-md-right order-1 order-md-2 mb-4 mb-md-0">
            <?php
              $image_text_image_element = get_sub_field('5050_text_image_image_col');
              $url = $image_text_image_element['url'];
              $alt = $image_text_image_element['alt'];

              echo '<img src="'.$url.'" alt="'.$alt.'">';
            ?>
          </div>
        </div>
    <?php
        } //end IF ELSE STATEMENT FOR ALTERNATING ROWS
      }// end if of reverse layout
      else {
        if( get_row_index() % 2 == 0 ){
          // this is an even row
    ?>
          <div class="row">
            <div class="col-md-6 order-2 order-md-1">
              <?php echo the_sub_field('5050_text_image_text_col'); ?>
            </div>
            <div class="col-md-6 text-center text-md-right order-1 order-md-2 mb-4 mb-md-0">
              <?php
                $image_text_image_element = get_sub_field('5050_text_image_image_col');
                $url = $image_text_image_element['url'];
                $alt = $image_text_image_element['alt'];

                echo '<img src="'.$url.'" alt="'.$alt.'">';
              ?>
            </div>
          </div>
        <?php    
          } else{
          // this is an odd row
        ?>
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
              <?php
                $image_text_image_element = get_sub_field('5050_text_image_image_col');
                $url = $image_text_image_element['url'];
                $alt = $image_text_image_element['alt'];

                echo '<img src="'.$url.'" alt="'.$alt.'">';
              ?>
            </div>
            <div class="col-md-6">
              <?php echo the_sub_field('5050_text_image_text_col'); ?>
            </div>
        </div>
    <?php
      }}
       
      endwhile;
    endif;
    ?>
  </div>
</section>