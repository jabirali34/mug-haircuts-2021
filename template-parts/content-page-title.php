<?php
  //vars
  // check if the repeater field has rows of data
  if( have_rows('page_title') ):

    // loop through the rows of data
    while ( have_rows('page_title') ) : the_row();

?>

<section id="inner-page-title-header" class="d-flex align-items-center page-title-bg page-title" style="position:relative; background-image:url('<?php
  if ( has_post_thumbnail() ) {
      echo the_post_thumbnail_url();
  }
  else {
      echo '/wp-content/themes/mug-haircuts-2021/img/signa-banner.jpg';
  }
  ?>');">
  <div id="bg-filter"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col text-center">
        <h1 class="mt-0" style="margin-bottom:15px;"><?php echo get_sub_field('page_title'); ?></h1>

        <?php 
              $hero_phone = get_sub_field('hero_phone_number');
              if($hero_phone):
            ?>
        <p class="mb-0 location-phone-icon" style="font-size:18px;"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M16 12.6364C16 12.8409 15.9621 13.108 15.8864 13.4375C15.8106 13.767 15.7311 14.0265 15.6477 14.2159C15.4886 14.5947 15.0265 14.9962 14.2614 15.4205C13.5492 15.8068 12.8447 16 12.1477 16C11.9432 16 11.7443 15.9867 11.5511 15.9602C11.358 15.9337 11.1402 15.8864 10.8977 15.8182C10.6553 15.75 10.4754 15.6951 10.358 15.6534C10.2405 15.6117 10.0303 15.5341 9.72727 15.4205C9.42424 15.3068 9.23864 15.2386 9.17045 15.2159C8.42803 14.9508 7.76515 14.6364 7.18182 14.2727C6.21212 13.6742 5.21023 12.858 4.17614 11.8239C3.14205 10.7898 2.32576 9.78788 1.72727 8.81818C1.36364 8.23485 1.04924 7.57197 0.784091 6.82955C0.761364 6.76136 0.693182 6.57576 0.579545 6.27273C0.465909 5.9697 0.388258 5.75947 0.346591 5.64205C0.304924 5.52462 0.25 5.3447 0.181818 5.10227C0.113636 4.85985 0.0662879 4.64205 0.0397727 4.44886C0.0132576 4.25568 0 4.05682 0 3.85227C0 3.1553 0.193182 2.45076 0.579545 1.73864C1.00379 0.973485 1.4053 0.511364 1.78409 0.352273C1.97348 0.268939 2.23295 0.189394 2.5625 0.113636C2.89205 0.0378788 3.15909 0 3.36364 0C3.4697 0 3.54924 0.0113636 3.60227 0.0340909C3.73864 0.0795455 3.93939 0.367424 4.20455 0.897727C4.28788 1.04167 4.40152 1.24621 4.54545 1.51136C4.68939 1.77652 4.82197 2.01705 4.94318 2.23295C5.06439 2.44886 5.18182 2.65152 5.29545 2.84091C5.31818 2.87121 5.38447 2.96591 5.49432 3.125C5.60417 3.28409 5.68561 3.41856 5.73864 3.52841C5.79167 3.63826 5.81818 3.74621 5.81818 3.85227C5.81818 4.00379 5.71023 4.19318 5.49432 4.42045C5.27841 4.64773 5.04356 4.85606 4.78977 5.04545C4.53598 5.23485 4.30114 5.43561 4.08523 5.64773C3.86932 5.85985 3.76136 6.03409 3.76136 6.17045C3.76136 6.23864 3.7803 6.32386 3.81818 6.42614C3.85606 6.52841 3.88826 6.60606 3.91477 6.65909C3.94129 6.71212 3.99432 6.80303 4.07386 6.93182C4.15341 7.06061 4.19697 7.13258 4.20455 7.14773C4.7803 8.18561 5.43939 9.07576 6.18182 9.81818C6.92424 10.5606 7.81439 11.2197 8.85227 11.7955C8.86742 11.803 8.93939 11.8466 9.06818 11.9261C9.19697 12.0057 9.28788 12.0587 9.34091 12.0852C9.39394 12.1117 9.47159 12.1439 9.57386 12.1818C9.67614 12.2197 9.76136 12.2386 9.82955 12.2386C9.96591 12.2386 10.1402 12.1307 10.3523 11.9148C10.5644 11.6989 10.7652 11.464 10.9545 11.2102C11.1439 10.9564 11.3523 10.7216 11.5795 10.5057C11.8068 10.2898 11.9962 10.1818 12.1477 10.1818C12.2538 10.1818 12.3617 10.2083 12.4716 10.2614C12.5814 10.3144 12.7159 10.3958 12.875 10.5057C13.0341 10.6155 13.1288 10.6818 13.1591 10.7045C13.3485 10.8182 13.5511 10.9356 13.767 11.0568C13.983 11.178 14.2235 11.3106 14.4886 11.4545C14.7538 11.5985 14.9583 11.7121 15.1023 11.7955C15.6326 12.0606 15.9205 12.2614 15.9659 12.3977C15.9886 12.4508 16 12.5303 16 12.6364Z"
              fill="white" />
          </svg> <b><?php echo $hero_phone; ?></b></p>
        <?php
              endif;
              $intro_p = get_sub_field('intro_paragraph');
              if( $intro_p ): 
            ?>
        <p class="mt-0 mb-0" style="margin-top:23px; font-size:18px;"><?php echo $intro_p; ?></p>
        <?php endif; ?>
        <?php
              // check if the repeater field has rows of data
              if( have_rows('page_title_cta_button_link') ):

                // loop through the rows of data
                while ( have_rows('page_title_cta_button_link') ) : the_row();
                  if(get_sub_field('button_text')):
                    if( get_sub_field('custom_link_radio_button') == 'Yes' ):
                      echo '<a class="btn white mt-4" href="'.get_sub_field('button_page_custom_link').'">'.get_sub_field('button_text').'</a>';
                    else:
                      echo '<a class="btn white mt-4" href="'.get_sub_field('button_page_link').'">'.get_sub_field('button_text').'</a>';
                    endif;
                  endif;
                endwhile;

              endif;
            ?>
      </div>
    </div>
  </div>
</section>

<?php
    endwhile;
  endif;

?>