<?php
/**
 * Template Name: Team Member Page
 *
 * @package start-theme
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Hero Section-->
  <?php get_template_part( 'template-parts/content-page-title-2' ); ?>

  <!-- Main Content -->
  <?php get_template_part( 'template-parts/content-members' ); ?>

  <!-- Social Feed -->
  <?php signa_select_social(); ?>
  
  <?php
  //vars
  $mid_page_cta_team = get_field('cta_1'); 
  //background image
  if($mid_page_cta_team['mid_page_cta_team_background_image']){
    $mid_page_cta_team_bg = $mid_page_cta_team['mid_page_cta_team_background_image'];
    $mid_page_cta_team_bg_display = 'style="background-image:url('.$mid_page_cta_team_bg.') !important; background-size:cover !important; position:relative;"';
  }

  $mid_page_cta_team_white_text = "";
  if ($mid_page_cta_team['text_color_team'] == 'White'){
    $mid_page_cta_team_white_text =  "text-white";
  }

  if ($mid_page_cta_team['mid_page_cta_team_button_text']){
  if ($mid_page_cta_team['mid_page_cta_team_align_center'] == 'Yes'){
?>

    <section class="py-80 bg-blue mid-page-cta" data-aos="fade-up" <?php echo $mid_page_cta_team_bg_display; ?> >
      <?php
        if($mid_page_cta_team['mid_page_cta_team_background_image']){
      ?>
        <div id="bg-filter"></div>
      <?php
        }
      ?>
      <div class="container">
        <div class="row text-center">
          <div class="col-12 col-md-8 offset-md-2">
            <h3 class="h2 font-weight-bold mt-0 <?php echo $mid_page_cta_team_white_text; if(!$mid_page_cta['mid_page_cta_subtext']){echo " mb-4";}; ?>"><?php echo $mid_page_cta_team['mid_page_cta_team_text']; ?></h3>
            <?php
              if($mid_page_cta_team['mid_page_cta_team_subtext']){
            ?>
              <p class=" <?php echo $mid_page_cta_team_white_text; ?>"><?php echo $mid_page_cta_team['mid_page_cta_team_subtext']; ?></p>
            <?php
              }
            ?>
            <a href="<?php echo $mid_page_cta_team['mid_page_cta_team_button_link']; ?>" class="btn blue"><?php echo $mid_page_cta_team['mid_page_cta_team_button_text']; ?></a>
          </div>
        </div>
      </div>
    </section>
<?php
  } else {
?>
    <section class="py-80 bg-blue mid-page-cta" data-aos="fade-up" <?php echo $mid_page_cta_team_bg_display; ?> >
      <?php
        if($mid_page_cta_team['mid_page_cta_team_background_image']){
      ?>
        <div id="bg-filter"></div>
      <?php
        }
      ?>
      <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-8">
              <h3 class="h2 font-weight-bold mt-0 <?php echo $mid_page_cta_team_white_text; ?>"><?php echo $mid_page_cta_team['mid_page_cta_team_text']; ?></h3>
              <?php
                if($mid_page_cta_team['mid_page_cta_team_subtext']){
              ?>
                <p class="mb-md-0 <?php echo $mid_page_cta_team_white_text;?>"><?php echo $mid_page_cta_team['mid_page_cta_team_subtext']; ?></p>
              <?php
                }
              ?>
            </div>
            <div class="col-md-4 text-center">
              <a href="<?php echo $mid_page_cta_team['mid_page_cta_team_button_link']; ?>" class="btn blue"><?php echo $mid_page_cta_team['mid_page_cta_team_button_text']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
  }
}
?>

</article><!-- #post-## -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>