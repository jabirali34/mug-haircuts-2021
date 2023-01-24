<section class="py-80 pt-0" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="location-main-content">
                    <?php 
                    $image_text_image_element = get_sub_field('image');
                    if($image_text_image_element):
                        ?>
                    <div class="location-main-content-image">
                        <?php
                            $image_text_image_element = get_sub_field('image');
                            $url = $image_text_image_element['url'];
                            $alt = $image_text_image_element['alt'];

                            echo '<img src="'.$url.'" alt="'.$alt.'">';
                        ?>
                    </div>
                    <?php endif;
                    echo get_sub_field('content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>