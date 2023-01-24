<?php
/**
 * The template for displaying pages that use flexible layouts
 * Template Name: Locations Page
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
    <!-- <section class="py-80 " style="background-color:#282828;" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php //echo do_shortcode('[ASL_STORELOCATOR]') ?>
                </div>
            </div>
        </div>
    </section> -->


    <section class="py-80 wood-bg-2" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-60">
                    <?php echo do_shortcode('[ASL_STORELOCATOR]') ?>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Chandler</p>
                            <p class="address mb-0">3020 S Gilbert Rd, Suite #6<br>Chandler, AZ 85286</p>
                            <p><a href="tel:(480) 794-1594" class="phone">(480) 794-1594</a></p>
                            <a style="margin: 5px auto;" href="/location/chandler/" class="btn blue black-border"
                            >View Location</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Gilbert</p>
                            <p class="address mb-0">3425 E Baseline Rd, Suite #105<br>Gilbert, Arizona 85234</p>
                            <p><a href="tel:(480) 590-4713" class="phone">(480) 590-4713</a></p>
                            <a style="margin: 5px auto;" href="/location/gilbert-dana-park/"
                                class="btn blue black-border">View Location</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Gilbert</p>
                            <p class="address mb-0">734 N McQueen Rd #103<br>Gilbert, AZ 85233</p>
                            <p><a href="tel:(480) 590-4713" class="phone">(480) 507-3437</a></p>
                            <a style="margin: 5px auto;" href="/location/gilbert/"
                                class="btn blue black-border">View Location</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Gilbert</p>
                            <p class="address mb-0">2512 S Val Vista Dr #104<br>Gilbert, AZ 85295</p>
                            <p><a href="tel:(480) 590-4713" class="phone">(480) 275-8055</a></p>
                            <a style="margin: 5px auto;" href="/location/gilbert-val-vista-dr/"
                                class="btn blue black-border">View Location</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Gilbert</p>
                            <p class="address mb-0">5498 S Power Rd, Suite #105,<br>Gilbert, AZ 85295</p>
                            <p><a href="tel:(480) 590-4713" class="phone">(480) 219-5119</a></p>
                            <a style="margin: 5px auto;" href="/location/gilbert-power-rd/"
                                class="btn blue black-border">View Location</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Glendale</p>
                            <p class="address mb-0">9390 W Hanna Dr #B107<br>Glendale, AZ 85305</p>
                            <p><a href="tel:(480) 590-4713" class="phone">(623) 772-7279</a></p>
                            <a style="margin: 5px auto;" href="/location/glendale/"
                                class="btn blue black-border">View Location</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4 mb-xl-0">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Glendale</p>
                            <p class="address mb-0">7507 W Rose Garden Ln Suite #106<br>Glendale, AZ 85308</p>
                            <p><a href="tel:(480) 590-4713" class="phone">(623) 215-8184</a></p>
                            <a style="margin: 5px auto;" href="/location/glendale-rose-garden/"
                                class="btn blue black-border">View Location</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4 mb-xl-0">
                    <div class="cta-card card-margin-below">
                        <div class="cta-card-container no-icon-bg text-center small-card-container">
                            <p class="h3 mt-0 text-uppercase"
                                style="width:265px; max-width:100%; margin:auto; margin-bottom:15px;">Tempe</p>
                            <p class="address mb-0">1761 E Warner Rd #A-15<br>Tempe, AZ 85284</p>
                            <p><a href="tel:(480) 590-4713" class="phone">(480) 491-5182</a></p>
                            <a style="margin: 5px auto;" href="/location/tempe/"
                                class="btn blue black-border">View Location</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="py-80" style="background-color:#282828;" data-aos="fade-up">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mt-0 text-white h1 pb-60 mb-0" style="font-family:'Open Sans'; font-weight:bold;">What Our <span style="color:#BB5D29;">Customers</span> Are Saying</h2>
                </div>

                <div class="col-md-4 mb-4 mb-md-0 text-center text-white">
                    <div class="quote-icon"><svg fill="none" height="32" viewBox="0 0 32 32" width="32"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m16.95 29.55c1.95-1 3.8-2.25 5.4-3.75.35-.35.75-.7 1.05-1.05.15-.15.3-.3.45-.5.25-.25.4-.5.65-.75.25-.3.5001-.6.7001-.95.45-.7.9-1.4 1.25-2.15.2-.4.3999-.8.5499-1.25.4-1.1.7-2.25.85-3.4.05-.3.0501-.65.1001-.95.05-.85.0499-1.65-.1001-2.5-.4-2.5-1.4-4.65-3.1-6.45-.65-.75-1.45-1.35-2.25-1.9-1.55-1-3.25-1.6-5.1-1.85-.2-.05-.45 0-.65-.1h-1.6c0 .05-.05.05-.1.05-.4.05-.8.1-1.2.15-2.95.55-5.34995 2-7.19995 4.35-1.55 1.9-2.4 4.15-2.55 6.6-.15 1.75.1 3.5.75 5.25.1.3.25.55.35.8.05.05.05.15.1.2.65 1.25 1.45 2.4 2.5 3.35.55.5 1.1.95 1.75 1.35 1.89995 1.2 3.99995 1.85 6.29995 1.9.15 0 .2.05.2.2v2.8c-.05.45.45.75.9.55zm.15-18.8c-.05-.3.05-.5.3-.65.1-.05.2-.1.3-.1h4.45c.4 0 .6.35.6.8v5.25c0 1.5-.9499 2.9-2.2999 3.5-.05 0-.0501.05-.1001.05 0 .05.0501.05.1001.05-.05 0-.0501 0-.1001-.05h-.05s0 0-.05 0c-.3.1-.6.15-.9.2-.2.05-.35-.1-.35-.3 0-.15 0-.3 0-.5 0-.3 0-.55 0-.85 0-.05 0-.15 0-.2 0-.2.1-.3.35-.4.35-.1.65-.2.95-.45.3-.3.5-.7.55-1.1-.95 0-1.85 0-2.8 0-.1 0-.2 0-.3 0-.4 0-.65-.25-.65-.65 0-1.5 0-3.05 0-4.6 0 .05 0 .05 0 0zm-2.2 5.3c0 1.1-.45 2.05-1.25 2.8-.05.05-.1.1-.1.1-.4.3-.85.6-1.4.7-.2.05-.45.1-.65.15-.15.05-.3-.05-.35-.25 0-.5 0-.95 0-1.45 0-.15-.05-.3.05-.4.05-.05.1-.1.2-.15.25-.05.5-.1.75-.25.4-.25.7-.6.8-1.1 0-.05.05-.15.05-.25-1 0-2 0-3.04995 0-.1 0-.15 0-.25-.05-.25-.05-.45-.3-.45-.6 0-1.55 0-3.05 0-4.6 0-.25 0-.5.2-.65.1-.1.25-.15.4-.15h4.44995c.4 0 .6.1.6.8z"
                                fill="#fff" /></svg></div>
                    <p>AWESOME! I get my haircut at the MUG Store in Mesa so I decided to go here before a Coyotes game.
                        Great haircut while I talked to the stylists and watched basketball. Very cool place with great
                        service.</p>
                    <p class="mb-0"><strong>A Google User</strong></p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0 text-center text-white">
                    <div class="quote-icon"><svg fill="none" height="32" viewBox="0 0 32 32" width="32"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m16.95 29.55c1.95-1 3.8-2.25 5.4-3.75.35-.35.75-.7 1.05-1.05.15-.15.3-.3.45-.5.25-.25.4-.5.65-.75.25-.3.5001-.6.7001-.95.45-.7.9-1.4 1.25-2.15.2-.4.3999-.8.5499-1.25.4-1.1.7-2.25.85-3.4.05-.3.0501-.65.1001-.95.05-.85.0499-1.65-.1001-2.5-.4-2.5-1.4-4.65-3.1-6.45-.65-.75-1.45-1.35-2.25-1.9-1.55-1-3.25-1.6-5.1-1.85-.2-.05-.45 0-.65-.1h-1.6c0 .05-.05.05-.1.05-.4.05-.8.1-1.2.15-2.95.55-5.34995 2-7.19995 4.35-1.55 1.9-2.4 4.15-2.55 6.6-.15 1.75.1 3.5.75 5.25.1.3.25.55.35.8.05.05.05.15.1.2.65 1.25 1.45 2.4 2.5 3.35.55.5 1.1.95 1.75 1.35 1.89995 1.2 3.99995 1.85 6.29995 1.9.15 0 .2.05.2.2v2.8c-.05.45.45.75.9.55zm.15-18.8c-.05-.3.05-.5.3-.65.1-.05.2-.1.3-.1h4.45c.4 0 .6.35.6.8v5.25c0 1.5-.9499 2.9-2.2999 3.5-.05 0-.0501.05-.1001.05 0 .05.0501.05.1001.05-.05 0-.0501 0-.1001-.05h-.05s0 0-.05 0c-.3.1-.6.15-.9.2-.2.05-.35-.1-.35-.3 0-.15 0-.3 0-.5 0-.3 0-.55 0-.85 0-.05 0-.15 0-.2 0-.2.1-.3.35-.4.35-.1.65-.2.95-.45.3-.3.5-.7.55-1.1-.95 0-1.85 0-2.8 0-.1 0-.2 0-.3 0-.4 0-.65-.25-.65-.65 0-1.5 0-3.05 0-4.6 0 .05 0 .05 0 0zm-2.2 5.3c0 1.1-.45 2.05-1.25 2.8-.05.05-.1.1-.1.1-.4.3-.85.6-1.4.7-.2.05-.45.1-.65.15-.15.05-.3-.05-.35-.25 0-.5 0-.95 0-1.45 0-.15-.05-.3.05-.4.05-.05.1-.1.2-.15.25-.05.5-.1.75-.25.4-.25.7-.6.8-1.1 0-.05.05-.15.05-.25-1 0-2 0-3.04995 0-.1 0-.15 0-.25-.05-.25-.05-.45-.3-.45-.6 0-1.55 0-3.05 0-4.6 0-.25 0-.5.2-.65.1-.1.25-.15.4-.15h4.44995c.4 0 .6.1.6.8z"
                                fill="#fff" /></svg></div>
                    <p>I usually go to the MUG on the east side, but my son and I were going to Coyotes game so we checked this one out. And I liked it even more! The haircut and service were just as good, but they play cool music here, have move TVs and seem like they are having a great time working. If I lived anywhere within 15 miles of this place it would definitely be my new shop.</p>
                    <p class="mb-0"><strong>A Google User</strong></p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0 text-center text-white">
                    <div class="quote-icon"><svg fill="none" height="32" viewBox="0 0 32 32" width="32"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m16.95 29.55c1.95-1 3.8-2.25 5.4-3.75.35-.35.75-.7 1.05-1.05.15-.15.3-.3.45-.5.25-.25.4-.5.65-.75.25-.3.5001-.6.7001-.95.45-.7.9-1.4 1.25-2.15.2-.4.3999-.8.5499-1.25.4-1.1.7-2.25.85-3.4.05-.3.0501-.65.1001-.95.05-.85.0499-1.65-.1001-2.5-.4-2.5-1.4-4.65-3.1-6.45-.65-.75-1.45-1.35-2.25-1.9-1.55-1-3.25-1.6-5.1-1.85-.2-.05-.45 0-.65-.1h-1.6c0 .05-.05.05-.1.05-.4.05-.8.1-1.2.15-2.95.55-5.34995 2-7.19995 4.35-1.55 1.9-2.4 4.15-2.55 6.6-.15 1.75.1 3.5.75 5.25.1.3.25.55.35.8.05.05.05.15.1.2.65 1.25 1.45 2.4 2.5 3.35.55.5 1.1.95 1.75 1.35 1.89995 1.2 3.99995 1.85 6.29995 1.9.15 0 .2.05.2.2v2.8c-.05.45.45.75.9.55zm.15-18.8c-.05-.3.05-.5.3-.65.1-.05.2-.1.3-.1h4.45c.4 0 .6.35.6.8v5.25c0 1.5-.9499 2.9-2.2999 3.5-.05 0-.0501.05-.1001.05 0 .05.0501.05.1001.05-.05 0-.0501 0-.1001-.05h-.05s0 0-.05 0c-.3.1-.6.15-.9.2-.2.05-.35-.1-.35-.3 0-.15 0-.3 0-.5 0-.3 0-.55 0-.85 0-.05 0-.15 0-.2 0-.2.1-.3.35-.4.35-.1.65-.2.95-.45.3-.3.5-.7.55-1.1-.95 0-1.85 0-2.8 0-.1 0-.2 0-.3 0-.4 0-.65-.25-.65-.65 0-1.5 0-3.05 0-4.6 0 .05 0 .05 0 0zm-2.2 5.3c0 1.1-.45 2.05-1.25 2.8-.05.05-.1.1-.1.1-.4.3-.85.6-1.4.7-.2.05-.45.1-.65.15-.15.05-.3-.05-.35-.25 0-.5 0-.95 0-1.45 0-.15-.05-.3.05-.4.05-.05.1-.1.2-.15.25-.05.5-.1.75-.25.4-.25.7-.6.8-1.1 0-.05.05-.15.05-.25-1 0-2 0-3.04995 0-.1 0-.15 0-.25-.05-.25-.05-.45-.3-.45-.6 0-1.55 0-3.05 0-4.6 0-.25 0-.5.2-.65.1-.1.25-.15.4-.15h4.44995c.4 0 .6.1.6.8z"
                                fill="#fff" /></svg></div>
                    <p>Brought my son here. Was surprised how good they were with kids. Barbie was very sweet and funny and it made my son actually enjoy his haircut. I definitely appreciated their attention to detail, not a “chop shop” by any means. Very cool vibe here, I definitely recommend giving it a try.</p>
                    <p class="mb-0"><strong>Michelle Wood</strong></p>
                </div>
            </div>
        </div>
    </section>

</article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>