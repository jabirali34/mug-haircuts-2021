<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-theme
 */

?>
</div><!-- #content -->

<footer id="footer" class="site-footer bg-brown" role="contentinfo">

  <section>
    <div class="container">
      <div class="row justify-content-between py-80">
        <div class="col-md-4 mb-4 mb-md-0 text-center text-md-left">
          <h5 class="mt-0 h2 text-white text-uppercase">Make an appointment</h5>
          <p>Schedule Your Haircut with our mobile app!</p>
          <a class="d-block mb-2" href="https://itunes.apple.com/us/app/mug-haircuts/id1012474995?mt=8" target="_blank"><img style ="width:180px; max-width:100%;" src="/wp-content/uploads/2021/03/apple-store-btn.png" alt=""></a>
          <a class="d-block"href="https://play.google.com/store/apps/details?id=com.saloncheckin.mug&hl=en" target="_blank"><img style ="width:180px; max-width:100%;" src="/wp-content/uploads/2021/03/google-app-store-btn.png" alt=""></a>
        </div>

        <div class="col-md-4 mb-3 mb-md-0 text-center text-md-left" style="">
          <h5 class="mt-0 h2 text-white text-uppercase">Mug's Quick Links</h5>
            <?php echo wp_nav_menu(array('footer1','Footer Column 1')); ?>
        </div>

        <div class="col-md-4 mb-0 text-center text-md-left">
          <h5 class="mt-0 h2 text-white text-uppercase">woodlee’s Blog</h5>
          <ul class="menu mb-0">
            <li><a href="https://woodlees.com/10-reasons-men-grow-beard/" alt="go to woodlees blog - 10 Reasons Why Men Should Grow A Beard" target="_blank">10 Reasons Why Men Should Grow A Beard</a></li>
            <li><a href="https://woodlees.com/safety-razor-vs-straight-razor/" alt="Safety Razor vs. Straight Razor" target="_blank">Safety Razor vs. Straight Razor</a></li>
            <li class="mb-0"><a href="https://woodlees.com/how-to-choose-the-right-razor/" alt="go to woodlees blog - How to Choose the Right Razor" target="_blank">How to Choose the Right Razor</a></li>
          </ul>
            <?php //echo wp_nav_menu( array('footer2','Footer Column 2')); ?>
        </div>

      </div>
    </div>
  </section>

  <section class="bg-footer-bottom">
    <div class="container">
      <div class="row align-items-center" style="padding:0px 0px 20px;">
        <div class="col-12" ><div style="border-top:1px solid #777777; margin-bottom:20px;"></div></div>
        <div class="col-md-9 text-center text-md-left">
        <p class="mb-3 mb-md-0" style="font-size:13px; line-height:1;">Copyright © <?php echo date("Y"); ?> Men's Ultimate Grooming | All Rights Reserved</p>
        </div>
        <div class="col-md-3 text-center text-md-right">
          <a href="https://www.facebook.com/MUGHaircuts/" target="_blank" alt="link to MUG facebook page" style="margin-right:20px;"><svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.0006 0C6.71601 0 0 6.71723 0 15.0006C0 23.2852 6.71601 30 15.0006 30C23.2852 30 30.0012 23.2852 30.0012 15.0006C30.0012 6.71723 23.2846 0 15.0006 0ZM18.9705 14.9379H16.373C16.373 19.0887 16.373 24.2014 16.373 24.2014H12.5231C12.5231 24.2014 12.5231 19.1411 12.5231 14.9379H10.692V11.6673H12.5231V9.548C12.5231 8.03119 13.2432 5.66338 16.409 5.66338L19.2599 5.67434V8.85112C19.2599 8.85112 17.5262 8.85112 17.1899 8.85112C16.8519 8.85112 16.3737 9.01986 16.3737 9.74111V11.6679H19.3086L18.9705 14.9379Z" fill="white"/>
</svg></a>
          <a href="https://www.instagram.com/mughaircuts/" target="_blank" alt="link to MUG instagram page"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M30 15C30 6.72129 23.2787 2.93797e-07 15 6.55671e-07C6.72129 1.01754e-06 -1.01754e-06 6.72129 -6.55671e-07 15C-2.93797e-07 23.2787 6.72129 30 15 30C23.2787 30 30 23.2787 30 15ZM24.375 15C24.375 17.5461 24.3642 17.8654 24.3186 18.8653C24.273 19.8632 24.1146 20.5447 23.8828 21.141C23.6432 21.7575 23.3227 22.2803 22.8015 22.8015C22.2803 23.3227 21.7574 23.6433 21.141 23.8829C20.5447 24.1146 19.8632 24.273 18.8653 24.3186C17.8654 24.3642 17.5461 24.375 15 24.375C12.4539 24.375 12.1346 24.3642 11.1347 24.3186C10.1368 24.273 9.45533 24.1146 8.85902 23.8829C8.24256 23.6433 7.71973 23.3227 7.19848 22.8015C6.67729 22.2803 6.35672 21.7575 6.11713 21.141C5.88545 20.5447 5.72695 19.8632 5.68143 18.8653C5.63578 17.8654 5.625 17.5461 5.625 15C5.625 12.4539 5.63578 12.1347 5.68143 11.1347C5.72695 10.1368 5.88545 9.45533 6.11713 8.85903C6.35672 8.24256 6.67729 7.71973 7.19848 7.19848C7.71973 6.67729 8.24256 6.35672 8.85902 6.11713C9.45533 5.88545 10.1368 5.72695 11.1347 5.68143C12.1346 5.63578 12.4539 5.625 15 5.625C17.5461 5.625 17.8654 5.63578 18.8653 5.68143C19.8632 5.72695 20.5447 5.88545 21.141 6.11713C21.7574 6.35672 22.2803 6.67729 22.8015 7.19848C23.3227 7.71973 23.6432 8.24256 23.8828 8.85902C24.1145 9.45533 24.273 10.1368 24.3186 11.1347C24.3642 12.1346 24.375 12.4539 24.375 15ZM22.6858 15C22.6858 12.4968 22.6762 12.2003 22.6311 11.2117C22.5894 10.2976 22.4367 9.80127 22.3083 9.47092C22.1383 9.03328 21.9351 8.72098 21.607 8.39297C21.279 8.06484 20.9667 7.8617 20.5291 7.69166C20.1987 7.56328 19.7024 7.41053 18.7883 7.36887C17.7997 7.32375 17.5032 7.3142 15 7.3142C12.4968 7.3142 12.2003 7.32375 11.2117 7.36887C10.2976 7.41053 9.80127 7.56328 9.47092 7.69166C9.03328 7.8617 8.72097 8.06485 8.39297 8.39297C8.06484 8.72098 7.8617 9.03328 7.69166 9.47092C7.56328 9.80127 7.41053 10.2976 7.36887 11.2117C7.32375 12.2001 7.3142 12.4966 7.3142 15C7.3142 17.5034 7.32375 17.7998 7.36887 18.7883C7.41053 19.7024 7.56328 20.1987 7.69166 20.5291C7.8617 20.9667 8.06484 21.279 8.39297 21.6071C8.72098 21.9352 9.03328 22.1383 9.47092 22.3083C9.80127 22.4367 10.2976 22.5895 11.2117 22.6312C12.2003 22.6763 12.4968 22.6858 15 22.6858C17.5032 22.6858 17.7997 22.6763 18.7883 22.6312C19.7024 22.5895 20.1987 22.4367 20.5291 22.3083C20.9667 22.1383 21.279 21.9352 21.607 21.6071C21.9351 21.279 22.1383 20.9667 22.3083 20.5291C22.4367 20.1987 22.5894 19.7024 22.6311 18.7883C22.6762 17.7997 22.6858 17.5032 22.6858 15ZM19.8142 15C19.8142 17.6588 17.6588 19.8142 15 19.8142C12.3412 19.8142 10.1858 17.6588 10.1858 15C10.1858 12.3412 12.3412 10.1858 15 10.1858C17.6588 10.1858 19.8142 12.3412 19.8142 15ZM11.875 15C11.875 16.7259 13.2741 18.125 15 18.125C16.7259 18.125 18.125 16.7259 18.125 15C18.125 13.2741 16.7259 11.875 15 11.875C13.2741 11.875 11.875 13.2741 11.875 15ZM20.0044 8.87057C19.383 8.87057 18.8794 9.3743 18.8794 9.99563C18.8794 10.6169 19.383 11.1206 20.0044 11.1206C20.6257 11.1206 21.1294 10.6169 21.1294 9.99563C21.1294 9.3743 20.6257 8.87057 20.0044 8.87057Z" fill="white"/>
</svg></a>
        </div>
      </div>
    </div>
  </section>

</footer><!-- #colophon -->
</div><!-- #page -->
<?php
if (is_child_page('48')) { ?>
<script>document.getElementsByClassName("slides")[0].style = "display: flex;align-items: center;align-self: center;width: 100%;min-height: auto;";</script>
<?php
}
?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<!-- Instagram Feed -->
<!-- <script type="text/javascript" src="/wp-content/themes/mug-haircuts-2021/js/instafeed.js"></script> -->

<!-- Bootstrap JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- Lazy Loading -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-lazy@1.7.10/jquery.lazy.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-lazy@1.7.10/jquery.lazy.plugins.min.js"></script>
<script>
    jQuery(function($){
      $('.b-lazy').Lazy({
          // your configuration goes here
          scrollDirection: 'vertical',
          effect: 'fadeIn',
          visibleOnly: true,
          offset: 100, // Loads images 100px before they're visible
          onError: function(element) {
              console.log('error loading ' + element.data('src'));
          }
      });
    });
</script>
<!-- accordion script -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/accordion.js"></script>

<?php if(is_single()) : ?>
  <script type="text/javascript">
    // Progress bar when scrolling down blog single page
    if(document.querySelector(".progress-container")) {
      window.onscroll = function() {blogScroll()};
    }

    function blogScroll() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;

      document.querySelector(".progress-bar").style.width = scrolled + "%";
    }
  </script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/countable/3.0.1/Countable.min.js"></script>
  <script type="text/javascript">
    // Calculate reading time to element with ".reading-time"
    // where content is surrounded by ".blog-entry-content"
    // https://github.com/RadLikeWhoa/Countable
    var blogContent = document.querySelector('.blog-entry-content');
    if(blogContent) {
      Countable.on(blogContent, readTime);

      function readTime(counter) {
        var wpm = 200,
          estimatedRaw = counter.words / wpm,
          minutes = Math.round(estimatedRaw);
        
        var effectiveTime = (minutes < 1) ? "a couple of seconds" : minutes + " minute read";

        //console.log(effectiveTime);
        document.querySelector('.reading-time').append(effectiveTime);
      }
    }
  </script>
<?php endif; ?>


<script type="application/ld+json">
<?php
$schema = get_field('schema', 'options');
?>
  {
    "@context": "http://schema.org",
    "@type": "<?php echo $schema['business_type']; ?>",
    "image": "<?php echo $schema['business_logo']; ?>",
    "name": "<?php echo $schema['business_name']; ?>",
    "telephone": "<?php echo $schema['phone_number']; ?>",
    "description": "<?php echo $schema['business_description']; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "<?php echo $schema['city']; ?>",
      "addressRegion": "<?php echo $schema['state']; ?>",
      "postalCode": "<?php echo $schema['area_code']; ?>",
      "streetAddress": "<?php echo $schema['street_address']; ?>"
    }
    "priceRange": "<?php echo $schema['price_range']; ?>",

  }
</script>


<?php wp_footer(); ?>


</body>

</html>