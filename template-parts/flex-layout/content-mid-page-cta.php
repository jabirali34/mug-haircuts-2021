<?php
  //vars
  $mid_page_cta = get_sub_field('mid_page_cta'); 
  $mid_page_cta_bg_display = "";
  //background image
  if($mid_page_cta['mid_page_cta_background_image']){
    $mid_page_cta_bg = $mid_page_cta['mid_page_cta_background_image'];
    $mid_page_cta_bg_display = 'style="background-image:url('.$mid_page_cta_bg.') !important; background-size:cover; position:relative;"';
  }
  if ($mid_page_cta['text_color'] == 'White'){
    $mid_page_cta_white_text =  "text-white";
  }

  if ($mid_page_cta['mid_page_cta_align_center'] == 'Yes'){
?>

    <section class="py-80 bg-blue mid-page-cta" data-aos="fade-up" <?php echo $mid_page_cta_bg_display; ?> >
      <?php
        if($mid_page_cta['mid_page_cta_background_image']){
      ?>
        <div id="bg-filter"></div>
      <?php
        }
      ?>
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="h2 font-weight-bold mt-0  <?php echo $mid_page_cta_white_text; if(!$mid_page_cta['mid_page_cta_subtext']){echo " mb-4";}; ?>"><?php echo $mid_page_cta['mid_page_cta_text']; ?></h3>
            <?php
              if($mid_page_cta['mid_page_cta_subtext']){
            ?>
              <p class="col-md-8 offset-md-2 <?php echo $mid_page_cta_white_text; ?>"><?php echo $mid_page_cta['mid_page_cta_subtext']; ?></p>
            <?php
              }
            ?>
            <a href="<?php echo $mid_page_cta['mid_page_cta_button_link']; ?>" class="btn blue"><?php echo $mid_page_cta['mid_page_cta_button_text']; ?></a>
          </div>
        </div>
      </div>
    </section>
<?php
  } else {
?>
    <section class="py-80 bg-blue" data-aos="fade-up" <?php echo $mid_page_cta_bg_display; ?> >
      <?php
        if($mid_page_cta['mid_page_cta_background_image']){
      ?>
        <div id="bg-filter"></div>
      <?php
        }
      ?>
      <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-8">
              <h3 class="h2 font-weight-bold mt-0 <?php echo $mid_page_cta_white_text; ?>"><?php echo $mid_page_cta['mid_page_cta_text']; ?></h3>
              <?php
                if($mid_page_cta['mid_page_cta_subtext']){
              ?>
                <p class="mb-md-0 <?php echo $mid_page_cta_white_text;?>"><?php echo $mid_page_cta['mid_page_cta_subtext']; ?></p>
              <?php
                }
              ?>
            </div>
            <div class="col-md-4">
              <a href="<?php echo $mid_page_cta['mid_page_cta_button_link']; ?>" class="btn blue"><?php echo $mid_page_cta['mid_page_cta_button_text']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
  }
?>
