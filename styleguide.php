<?php
/**
 * Template Name: Styleguide Template
 * 
 * The template for displaying the styleguide to the user 
 */

get_header('stylesheet'); ?>


  <section class="padding-styleguide">
    <div class="container">
      <div class="row">
        <div class="col">
          <a href="/mug-haircuts-2021">&larr; Back to theme preview</a>
          <h1>Styleguide</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Headers -->
  <section class="padding-styleguide">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Header</h2>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/content-navbar-1' ); ?>

  <section class="padding-styleguide">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Header Option Two</h2>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/content-navbar-2' ); ?>

  <section class="padding-styleguide">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Header Option Three</h2>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/content-navbar-3' ); ?>

  <!-- Buttons -->
  <section class="padding-styleguide">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Buttons</h2>
        </div>
      </div>

      <div class="row pt-style">
        <div class="col mb-3">
          <a href="#" class="btn blue" style="border-radius: 0px !important;">Sharp Button</a>
        </div>
        <div class="col mb-3">
          <a href="#" class="btn blue" style="border-radius: 5px !important;">Rounded Button</a>
        </div>
        <div class="col mb-3">
          <a href="#" class="btn blue" style="border-radius: 50px !important;">Pill Button</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTAs -->
  <section class="padding-styleguide">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Page Call to Action</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="py-80 bg-blue">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h3 class="h2 font-weight-bold mt-0 mb-4 mb-md-5">Ready to get Started</h3>
          <a href="#" class="btn blue">Speak to an expert today</a>
        </div>
      </div>
    </div>
  </section>

  <section class="padding-styleguide">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Page Call to Action Option 2</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="py-80">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 text-center text-lg-left">
          <h3 class="mt-0 mb-lg-0 cta-2-text">Ready to see how we can help you reach your goals?</h3>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
          <a class="btn blue cta" href="#" >Contact An Expert</a>
        </div>
      </div>
    </div>
  </section>

  <section class="padding-styleguide">
    <div class="container">
      <div class="row pt-style">
      </div>
    </div>
  </section>


<?php
get_footer('stylesheet');