<?php
$upload_dir_data = wp_upload_dir();
$custom_templates_dir = $upload_dir_data['basedir'] . DIRECTORY_SEPARATOR . 'builder-templates';

$param  = "uploads";
$uploadurl = $upload_dir_data["baseurl"] ; 
?>
<section id="<?php echo $post->post_name; ?>" class="action_01cus section" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="container">
        <div class="action_01cus-title text-center">
            <img src="<?php echo get_field("logo"); ?>" class="" width="300">
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <img src="<?php echo $uploadurl."/builder-templates"."/images/left-side-arrow.png"; ?>" class="action_01cus-img a01img-left">
                <div class="action_01cus_image_wrappers lowerIMG">
                    <div class="act01-imholder text-center action_01cus-imgwrap">
                        <img src="<?php echo $uploadurl."/builder-templates"."/images/business-review.gif"; ?>" class="">
                        <p>Business Review <br>& Orientation</p>
                    </div>
                    <div class="act01-imholder text-center action_01cus-imgwrap">
                        <img src="<?php echo $uploadurl."/builder-templates"."/images/anualcalendar.gif"; ?>" class="">
                        <p>Development of<br>Annual Marketing<br>Calendar</p>
                    </div>
                </div>
                <div class="clearfix"></div> 
            </div>
            <div class="col-md-4">
                <div class="act01-img-separator">
                    <img src="<?php echo $uploadurl."/builder-templates"."/images/arrow1.png"; ?>" class="action_01cus-img a01img-small a01img-small-top">
                    <div class="action_01cus_image_wrappers lowerIMG">
                        <div class="act01-imholder text-center action_01cus-imgwrap">
                            <img src="<?php echo $uploadurl."/builder-templates"."/images/COMPETITIVE-REVIEW.gif"; ?>" class="">
                            <p>Competetive<br>Review</p>
                        </div> 
                    </div>
                    <img src="<?php echo $uploadurl."/builder-templates"."/images/arrow2.png"; ?>" class="action_01cus-img a01img-small a01img-small-top">
                    <div class="clearfix"></div> 
                </div>
                <div class="act01-img-separator" id="act01-img-separator-margin50">
                    <img src="<?php echo $uploadurl."/builder-templates"."/images/arrow1.png"; ?>" class="action_01cus-img a01img-small a01img-small-top">
                    <div class="action_01cus_image_wrappers lowerIMG">
                        <div class="act01-imholder text-center action_01cus-imgwrap">
                            <img src="<?php echo $uploadurl."/builder-templates"."/images/BRANDPOSITIONING.gif"; ?>" class="">
                            <p>Brand Strategy<br>& Positioning</p>
                        </div> 
                    </div>
                    <img src="<?php echo $uploadurl."/builder-templates"."/images/arrow2.png"; ?>" class="action_01cus-img a01img-small a01img-small-top">
                    <div class="clearfix"></div> 
                </div>
            </div>
            <div class="col-md-3">
                <div class="action_01cus_image_wrappers lowerIMG">
                    <div class="act01-imholder text-center action_01cus-imgwrap">
                        <img src="<?php echo $uploadurl."/builder-templates"."/images/creative-strategy.gif"; ?>" class="">
                        <p>Creative Strategy<br>Development</p>
                    </div>
                    <div class="act01-imholder text-center action_01cus-imgwrap">
                        <img src="<?php echo $uploadurl."/builder-templates"."/images/CAMPAIGNEVALUATION.gif"; ?>" class="">
                        <p>Campaign<br>Evaluation</p>
                    </div>
                </div>
                <img src="<?php echo $uploadurl."/builder-templates"."/images/right-side-arrow.png"; ?>" class="action_01cus-img a01img-left">
                <div class="clearfix"></div> 
            </div>
        </div> 
        <div id="action_01cus-button-wrapper">
            <a href="#" class="scoll-btn" data-anchor="5">DON’T JUST TAKE OUR WORD FOR IT</a>
        </div>
    </div>
    <?php if (get_field('allow_full-page_scrolling', 'option') == "Yes"): ?>
    <script>
        $("a").click(function(){
            var anchor = $(this).data("anchor");
            $.fn.fullpage.moveTo(anchor);
            return false;
        });
    </script>
    <?php endif ?>
</section>
