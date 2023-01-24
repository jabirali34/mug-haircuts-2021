<?php
/**
 * The template for displaying pages that use flexible layouts
 * Template Name: MUG VIP
 *
 * @package start-theme
 */

get_header(); ?>

<!-- Page Title Section-->
<?php get_template_part( 'template-parts/content-page-title' ); ?>
<?php //get_template_part('template-parts/content-global-notice'); ?>
<div class="brown-bg" style="width: 100%; height: 15px; display: block;"></div>


<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <section class="py-80" data-aos="fade-up">
    <div class="container alternating-page-layout">
      <div class="row align-items-center">

        <div class="col-md-5 order-2 order-md-1">
          <p class="">To become a MUG VIP Rewards Member, simply give us your email or phone number during your visit to any MUG location.</p>
            <p class="">As a Rewards Member you’ll earn:</p>
          <ul class="mb-0">
            <li>1 point for every $1 you spend</li>
            <li>150 MUG VIP Points = $10 Reward</li>
            <li>Exclusive deals & discounts</li>
          </ul>
          <h2 class="h3">Ready to book an appointment?</h2>
          <a href="/locations/" class="btn blue black-border mt-3">Choose Your Location</a>

        </div>

        <div class="col-md-7 text-center text-md-right mb-4 mb-md-0 order-1 order-md-2">
          <img style="width:640px; max-width:100%;" src="/wp-content/uploads/2021/03/double-image.png"
            alt="MUG Stylists at work">
        </div>

      </div>

      <div class="row align-items-center">
        <div class="col-md-7 text-center text-md-left mb-4 mb-md-0 ">
          <img style="width:640px; max-width:100%;" src="/wp-content/uploads/2021/03/mug-vip-img-2.jpg"
            alt="father and kids haircut">
        </div>
        <div class="col-md-5 ">
          <h2 class="large-h2 mt-0">WHAT IS<br>BAR • BE • TOL • O • GY<span class="register-icon-2">®</span>?</h2>
          <p class="mb-0">Only Available At Men’s Ultimate Grooming</p>
          <a href="/barbetology/" class="btn blue black-border">Learn More</a>

        </div>



      </div>

    </div>
  </section>


  <section class="py-80 brown-bg faq" data-aos="fade-up">
    <div class="container">
      <div class="row">

        <div class="col-12 text-white pb-60 text-center">
          <h2 class="h1 m-0" style="font-family:'Open Sans'">FAQ</h2>
        </div>
        <div class="col-12 text-white text-center">
          
            <p class="faq-text mb-0"><span class="text-orange font-weight-bold">Question: </span>Is there an age limit to become a MUG VIP
              Rewards Member?</p>
            <p class="faq-text"><span class="text-orange font-weight-bold">Answer: </span>There is no age limit, however you must have a
              valid email address.</p>
            <div class="faq-top-buffer">
              <p class="faq-text mb-0"><span class="text-orange font-weight-bold">Question: </span>Is there a MUG VIP Rewards Member number,
                card or key tag?</p>
              <p class="faq-text"><span class="text-orange font-weight-bold">Answer: </span>No. Simply check our point status at
                www.MUGRewards.com or ask your stylist. </p>
            </div>
            <div class="faq-top-buffer">
              <p class="faq-text mb-0"><span class="text-orange font-weight-bold">Question: </span>Can the MUG VIP Rewards be used at any
                location?</p>
              <p class="faq-text"><span class="text-orange font-weight-bold">Answer: </span>MUG Reward points are only redeemable at the
                location where you signed up.</p>
            </div>
            <div class="faq-top-buffer">
              <p class="faq-text mb-0"><span class="text-orange font-weight-bold">Question: </span>What is the maximum number of points a
                member can have associated with the account?</p>
              <p class="faq-text"><span class="text-orange font-weight-bold">Answer: </span>Unlimited</p>
            </div>
            <div class="faq-top-buffer">
              <p class="faq-text mb-0"><span class="text-orange font-weight-bold">Question: </span>Can the MUG VIP Rewards Member combine
                their rewards with other discounts or promotions?</p>
              <p class="faq-text mb-0"><span class="text-orange font-weight-bold">Answer: </span>Yes</p>
            </div>

          
        </div>

      </div>
    </div>
  </section>

  <section class="py-80 wood-bg" data-aos="fade-up">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="cta-card">
            <div class="cta-card-container no-icon-bg text-center">
              <p class="h2 mt-0 text-uppercase" style="width:380px; max-width:100%; margin:auto; margin-bottom:35px;">
                Find a location and get the mug experience!</p>
              <a href="/locations/" class="btn blue black-border wide mt-0">Book online at one of our locations</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


</article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>