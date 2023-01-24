<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package start-theme
 */

/**
 * Select social feed on page
 * 
 * Passes variable for background color, check your css for the appropriate class names
 * 
 * Uses locate_template instead of get_template_part to pass variable data
 */
function signa_select_social() {
  wp_reset_postdata();
  $section_bg_color = get_field('social_background_color');

  if(get_field('include_social_section') == 'instagram') {
    include(locate_template('template-parts/content-instagram.php', false, false));
  } 
  elseif(get_field('include_social_section') == 'twitter') {
    include(locate_template('template-parts/content-twitter.php', false, false));
  }
}

/**
 * Get post thumbnail by size
 * 
 * Get featured image size, default large, accepts huge, large, medium
 * ex: get_post_thumbnail_by_size("huge");
 * ex: get_post_thumbnail_by_size(); 
 * ex: <?php get_post_thumbnail_by_size("huge"); ?>
 */
function get_post_thumbnail_by_size($Size = "large") {
  global $post;
  if(has_post_thumbnail()) {
    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $Size);
    $featured_image = $featured_image[0];
    echo $featured_image;
  } else {
    $featured_image = false;
  }
}

function is_mobile_device() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
/**
 * Get post thumbnail alt 
 * 
 * for use inside the loop
 */
function get_post_thumbnail_alt() {
  global $post;
  $thumbnail_id = get_post_thumbnail_id( $post->ID );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
  echo $alt;
}

/**
 * Lightens/darkens a given colour (hex format), returning the altered colour in hex format.7
 * @param str $hex Colour as hexadecimal (with or without hash);
 * @percent float $percent Decimal ( 0.2 = lighten by 20%(), -0.4 = darken by 40%() )
 * @return str Lightened/Darkend colour as hexadecimal (with hash);
 */
function color_luminance( $hex, $percent ) {
	
	// validate hex string
	
	$hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
	$new_hex = '#';
	
	if ( strlen( $hex ) < 6 ) {
		$hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
	}
	
	// convert to decimal and change luminosity
	for ($i = 0; $i < 3; $i++) {
		$dec = hexdec( substr( $hex, $i*2, 2 ) );
		$dec = min( max( 0, $dec + $dec * $percent ), 255 ); 
		$new_hex .= str_pad( dechex( $dec ) , 2, 0, STR_PAD_LEFT );
	}		
	
	return $new_hex;
}