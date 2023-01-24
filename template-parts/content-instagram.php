<?php
$instagram_username = get_field('instagram_username', 'instagram');
if (get_field('social_text_color')) {
  $social_text_color = get_field('social_text_color');
  $instagram_link_color = get_field('instagram_link_color');
}
?>
<style>
  a.instagram-home-link,
  a.instagram-home-link:hover {
    color: <?php echo $instagram_link_color; ?>;
  }
</style>
<section class="py-80 pb-60" style="background-color: <?php echo $section_bg_color; ?>;" data-aos="fade-up">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12">
        <h3 class="trusted-company-title h3 mb-0 mt-0 title-margin" style="color: <?php echo $social_text_color; ?>;">Follow us on Instagram <a class="instagram-home-link" href="https://instagram.com/<?php echo $instagram_username; ?>" rel="noopener" target="_blank">@<?php echo $instagram_username; ?></a></h3>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col">
        <!-- Feed Container -->

        <div id="instafeed">

        <?php
          $posts = fetch_instagram_posts();

          if (!empty($posts)) {
            $index = 0;
            // var_dump($posts);
            foreach ($posts['data'] as $post) {
              
              if ($post['media_type'] == 'IMAGE') {
                $index++;
                if ($index > 4) {
                  break;
                }
          ?>
                <article>
                  <figure>
                    <a href="<?php echo $post['permalink']; ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo $post['media_url']; ?>" alt=""></a>
                  </figure>
                </article>

              <?php
              }
            }
          }
          ?>

        </div>


      </div>
    </div>

    <div class="row justify-content-center text-center">
      <div class="col-xs-12">
        <a href="https://www.instagram.com/<?php echo $instagram_username; ?>" class="btn blue" target="_blank">Follow us</a>
      </div>
    </div>
  </div>
</section>