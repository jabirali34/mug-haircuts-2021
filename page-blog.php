<?php
/**
 * Template Name: Blog Page
 *
 * @package start-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			//vars
			$page_title = get_field('page_title_content');
		?>
			<section id="inner-page-title-header" class="d-flex align-items-center page-title-bg page-title" style="position:relative; background-image:url('<?php 
				echo get_the_post_thumbnail_url(); ?>')
			;">
				<div id="bg-filter"></div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col text-center">
									<h1 class="mt-0 mb-0">News & Events</h1>
									<p class="mt-0 mb-0">lorem ipsum dolor sit amet consecteur ipsum lorem dolor sit amet consecteur ipsum</p>
								</div>
							</div>
						</div>
			</section>

			<section class="py-80 pb-60">
				<div class="container">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
					?>

								<div class="row">
					<?php
            $args_news = array(
              'post_type' => 'post',
              'posts_per_page' => 8,
            );
            $loop = new WP_Query($args_news);
						while ( $loop->have_posts() ) : $loop->the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('template-parts/content-blog-posts');
							
						endwhile;
					?>
						</div>
						<div class="row justify-content-center">
					<?php
						the_posts_navigation();
					?>
						</div>
					<?php
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
			</section>

			<!-- Newsletter -->
			<div class="test">
				<?php
					wp_reset_query();

					$enable_nl = get_field('enable_newsletter_cta');
					if($enable_nl):
					
					$newsletter_options = get_field('newsletter_options');
				?>

					<section class="py-80 bg-blue" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo $newsletter_options['cta_background_image']; ?>') !important; background-size: cover !important; background-position: center;">
						<div class="container">
							<div class="row text-center">
								<div class="col-12 align-items-center justify-content-center text-center">
									<h3 class="h2 font-weight-bold mt-0 text-white"><?php echo $newsletter_options['cta_title']; ?></h3>
									<button data-toggle="modal" data-target="#subscribeModal" class="btn blue" alt="mailchimp subscription newsletter"><?php echo $newsletter_options['cta_button_phrase']; ?></button>
								</div>
							</div>
						</div>
					</section>

					<?php get_template_part('template-parts') ?>

				<?php endif; ?>
			</div>

			<!-- Social Feed -->
      <?php signa_select_social(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//mailchimp modal 
get_template_part('template-parts/content-mailchimp', 'content-mailchimp');
get_footer();
