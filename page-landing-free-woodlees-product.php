<?php
/**
 * The template for displaying pages that use flexible layouts
 * Template Name: Free Woodlees Product
 *
 * @package start-theme
 */

get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/mug-haircuts-2021/css/scss/styles-landing.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,600;1,300&display=swap" rel="stylesheet">
<!-- Page Title Section-->

<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
    <section class="py-80 landing-page-hero woodlees" id="anchor" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-black text-center text-lg-left">
                    <h1><span>FREE</span> WOODLEE'S PRODUCT WITH ANY HAIRCUT</h1>
                    <div class="main-free-haircut-text">
                        <p class="my-0">Schedule your appointment now and receive a free Woodlee’s premium grooming product of your choice!</p>
                        <p class="redeem-text mb-0"><span style="font-weight: bold;">TO
                                REDEEM:</span></p>
                        <ol>
                            <li style="margin-bottom: 8px;">Screenshot this offer</li>
                            <li style="margin-bottom: 8px;">Download the MUG Haircuts app</li>
                            <li style="margin-bottom: 8px;">Book any haircut at a participating location</li>
                            <li style="mb-0">Show this screenshot at time of visit</li>
                        </ol>
                        <p style="font-size: 20px;font-style: italic; line-height:33px; font-weight:400;">* MUST book through our app to redeem. Eligible for first time clients only and only valid at participating locations. Excludes 32oz Conditioning Lotion.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img style="" class="ios-app"
                        src="/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/Woodlees-products-land2@2x.png">
                    <div class="download-apps-container d-flex justify-content-center"><a class="fb-apple-button-event"
                            style="width: 100%;margin-right: 15px;max-width: 225px;"
                            href="https://apps.apple.com/us/app/mug-haircuts/id1012474995" target="_blank"
                            rel="noopener noreferrer" onclick="fbq('trackCustom', 'ios-app-download-btn');"><img
                                src="/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/download-ios-app-min2x.png"></a><a
                            class="fb-google-button-event" style="width:100%;    max-width: 225px;"
                            href="https://play.google.com/store/apps/details?id=com.saloncheckin.mug" target="_blank"
                            rel="noopener noreferrer" onclick="fbq('trackCustom', 'google-app-download-btn');"><img
                                src="/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/download-android-app-min2x.png"></a>

                    </div>

                </div>
            </div>

            <img class="cta-arrow-dark" style="" src="/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/CTA-arrow@2x.png">
        </div>
    </section>


    <section class="py-5 happy-customers" data-aos="fade-up">
        <div class="container alternating-page-layout">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-12" style="margin-bottom:60px;">
                    <h3 class="landing-section-title mt-0 mb-0"
                        style="text-transform:uppercase;font-weight:bold;padding-bottom:0">countless
                        happy customers</h3>
                </div>
                <div class="col-lg-4 img-square mb-lg-0"><img
                        src="/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/happy-customer-left-min2x-2-1.jpg"
                        alt=""></div>
                <div class="col-lg-4 img-square mb-lg-0"><img
                        src="/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/happy-customer-middle-min2x-2-1.jpg"
                        alt=""></div>
                <div class="col-lg-4 img-square mb-0"><img
                        src="/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/happy-customer-right-min2x-2-1.jpg"
                        alt=""></div>

            </div>
        </div>
    </section>


    <section class="py-5 locations-section" data-aos="fade-up">
        <div class="container alternating-page-layout">
            <div class="row align-items-center text-center">

                <div class="col-12" style="margin-bottom:60px;">
                    <h3 class="landing-section-title mt-0 text-white"
                        style="text-transform:uppercase;font-weight:bold;padding-bottom:0">Our Locations
                    </h3>
                    <p class="text-white text-bold location-subtext">8 Locations and counting...</p>
                </div>

                <div class="col-lg-4  text-white">
                    <div class="location-item-text"
                        style="background:url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/location-chandler.jpg')">
                        <h3>Chandler</h3>
                        <p class="location-address">3020 S Gilbert Rd Suite #6<br>
                            Chandler, AZ 85286<br>
                            <a class="location-phone" href="tel:4807941594">(480) 794-1594</a></p>
                        <a class="view-location-link" href="/location/chandler/">View
                            Location</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="location-item-text"
                        style="background:url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/gilbert-dana-park-store-img-bg@2x.jpg');background-size:cover">
                        <h3>Gilbert</h3>
                        <p class="location-address">3425 E Baseline Rd, Suite 105<br>
                            Gilbert, Arizona 85234<br>
                            <a href="tel:4805904713">(480) 590-4713</a></p>
                        <a class="view-location-link" href="/location/gilbert-dana-park/">View Location</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="location-item-text"
                        style="background:url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/location-gilbert.jpg')">
                        <h3>Gilbert</h3>
                        <p class="location-address">734 N McQueen Rd #103<br>
                            Gilbert, AZ 85233<br>
                            <a href="tel:4805073437">(480) 507-3437</a></p>
                        <a class="view-location-link" href="https://mughaircuts.com/location/gilbert/">View Location</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="location-item-text"
                        style="background:url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/location-gilbert-2.jpg')">
                        <h3>Gilbert</h3>
                        <p class="location-address">2512 S Val Vista Dr #104<br>
                            Gilbert, AZ 85295<br>
                            <a href="tel:4802758055">(480) 275-8055</a></p>
                        <a class="view-location-link" href="/location/gilbert-val-vista-dr/">View Location</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="location-item-text"
                        style="background:url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/gilbert-power-rd-min.jpg')">
                        <h3>Gilbert</h3>
                        <p class="location-address">5498 S Power Rd, Ste. 105,<br>
                            Gilbert, AZ 85295<br>
                            <a href="tel:4802195119">(480) 219-5119</a></p>
                        <a class="view-location-link" href="/location/gilbert-power-rd/">View Location</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="location-item-text"
                        style="background: url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/location-glendale.jpg')">
                        <h3>Glendale</h3>
                        <p class="location-address">9390 W Hanna Dr #B107<br>
                            Glendale, AZ 85305<br>
                            <a href="tel:6237727279">(623) 772-7279</a></p>
                        <a class="view-location-link" href="https://mughaircuts.com/location/glendale/">View
                            Location</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="location-item-text mb-lg-0"
                        style="background: url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/mug-glendale-rose-garden-bg1.jpg');">
                        <h3>Glendale</h3>
                        <p class="location-address">7507 W Rose Garden Ln Suite 106,<br>Glendale, AZ 85308<br><a
                                href="tel:6232158184">(623) 215-8184</a></p>
                        <a class="view-location-link" href="/location/glendale-rose-garden/">View Location</a>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="location-item-text mb-lg-0" .=""
                        style="background:url('/wp-content/themes/mug-haircuts-2021/img/old-landing-pages/tempe-store-bg-2.png');">
                        <h3>Tempe</h3>
                        <p class="location-address">1761 E Warner Rd # A-15<br>Tempe, AZ 85284<br><a
                                href="tel:4804915182">(480) 491-5182</a></p>
                        <a class="view-location-link" href="/location/tempe/">View Location</a>
                    </div>
                </div>

                <div class="col-12 justify-content-center"><a class="blue-book-btn"  href="#anchor">Book Your Appointment</a></div>
            </div>
        </div>
    </section>

    <section class="py-80" style="background-color:#282828;" data-aos="fade-up">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mt-0 text-white h1 pb-60 mb-0" style="font-family:'Open Sans'; font-weight:bold;">What
                        Our <span style="color:#ff7a30;">Customers</span> Are Saying</h2>
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
                    <p>I usually go to the MUG on the east side, but my son and I were going to Coyotes game so we
                        checked this one out. And I liked it even more! The haircut and service were just as good, but
                        they play cool music here, have move TVs and seem like they are having a great time working. If
                        I lived anywhere within 15 miles of this place it would definitely be my new shop.</p>
                    <p class="mb-0"><strong>A Google User</strong></p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0 text-center text-white">
                    <div class="quote-icon"><svg fill="none" height="32" viewBox="0 0 32 32" width="32"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m16.95 29.55c1.95-1 3.8-2.25 5.4-3.75.35-.35.75-.7 1.05-1.05.15-.15.3-.3.45-.5.25-.25.4-.5.65-.75.25-.3.5001-.6.7001-.95.45-.7.9-1.4 1.25-2.15.2-.4.3999-.8.5499-1.25.4-1.1.7-2.25.85-3.4.05-.3.0501-.65.1001-.95.05-.85.0499-1.65-.1001-2.5-.4-2.5-1.4-4.65-3.1-6.45-.65-.75-1.45-1.35-2.25-1.9-1.55-1-3.25-1.6-5.1-1.85-.2-.05-.45 0-.65-.1h-1.6c0 .05-.05.05-.1.05-.4.05-.8.1-1.2.15-2.95.55-5.34995 2-7.19995 4.35-1.55 1.9-2.4 4.15-2.55 6.6-.15 1.75.1 3.5.75 5.25.1.3.25.55.35.8.05.05.05.15.1.2.65 1.25 1.45 2.4 2.5 3.35.55.5 1.1.95 1.75 1.35 1.89995 1.2 3.99995 1.85 6.29995 1.9.15 0 .2.05.2.2v2.8c-.05.45.45.75.9.55zm.15-18.8c-.05-.3.05-.5.3-.65.1-.05.2-.1.3-.1h4.45c.4 0 .6.35.6.8v5.25c0 1.5-.9499 2.9-2.2999 3.5-.05 0-.0501.05-.1001.05 0 .05.0501.05.1001.05-.05 0-.0501 0-.1001-.05h-.05s0 0-.05 0c-.3.1-.6.15-.9.2-.2.05-.35-.1-.35-.3 0-.15 0-.3 0-.5 0-.3 0-.55 0-.85 0-.05 0-.15 0-.2 0-.2.1-.3.35-.4.35-.1.65-.2.95-.45.3-.3.5-.7.55-1.1-.95 0-1.85 0-2.8 0-.1 0-.2 0-.3 0-.4 0-.65-.25-.65-.65 0-1.5 0-3.05 0-4.6 0 .05 0 .05 0 0zm-2.2 5.3c0 1.1-.45 2.05-1.25 2.8-.05.05-.1.1-.1.1-.4.3-.85.6-1.4.7-.2.05-.45.1-.65.15-.15.05-.3-.05-.35-.25 0-.5 0-.95 0-1.45 0-.15-.05-.3.05-.4.05-.05.1-.1.2-.15.25-.05.5-.1.75-.25.4-.25.7-.6.8-1.1 0-.05.05-.15.05-.25-1 0-2 0-3.04995 0-.1 0-.15 0-.25-.05-.25-.05-.45-.3-.45-.6 0-1.55 0-3.05 0-4.6 0-.25 0-.5.2-.65.1-.1.25-.15.4-.15h4.44995c.4 0 .6.1.6.8z"
                                fill="#fff" /></svg></div>
                    <p>Brought my son here. Was surprised how good they were with kids. Barbie was very sweet and funny
                        and it made my son actually enjoy his haircut. I definitely appreciated their attention to
                        detail, not a “chop shop” by any means. Very cool vibe here, I definitely recommend giving it a
                        try.</p>
                    <p class="mb-0"><strong>Michelle Wood</strong></p>
                </div>
                <div class="col-12 justify-content-center text-center"><a class="blue-book-btn"  href="#anchor">Book Your Appointment</a></div>
            </div>
        </div>
    </section>


</article><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>