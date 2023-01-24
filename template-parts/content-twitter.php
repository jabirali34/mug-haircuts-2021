<?php 
if(get_field('social_text_color')){
  $social_text_color = get_field('social_text_color');
}
?>

<style>
  #ctf .ctf-header-type-generic .ctf-header-generic-icon, #ctf .ctf-header-type-generic .ctf-header-link:hover .ctf-header-generic-icon {
    /* background: #0c7abf; */
    background: <?php echo $social_text_color; ?>;
  }
  p.ctf-header-no-bio {
    color: <?php echo $social_text_color; ?>;
  }
</style>
<section class="py-80 bg-blue">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
      </div>
    </div>
  </div>
</section>