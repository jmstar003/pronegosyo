<?php
$upload_dir_data = wp_upload_dir();
$custom_templates_dir = $upload_dir_data['basedir'] . DIRECTORY_SEPARATOR . 'builder-templates';

$param  = "uploads";
$uploadurl = $upload_dir_data["baseurl"] ; 
?> 

<section id="<?php echo $post->post_name; ?>" class="circle_01 section" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>

    <div class="circle-wrapper">
        <div class="circles circle-outer hideLEssthan1024">
            <img src="<?php echo $uploadurl."/builder-templates"."/images/outer-circle.png"; ?>" class="rotate_circle">
        </div>

        <div class="circles circle_core_layer hideLEssthan1024">
            <img src="<?php echo $uploadurl."/builder-templates"."/images/rainbow-circle.png"; ?>" class="rotate_circle_alternate">
        </div>

        <div class="circle_core hideLEssthan1024">
            <img src="<?php echo $uploadurl."/builder-templates"."/images/core-circle.png"; ?>" class="">
        </div> 

        <div class="circle_mobile showLessThan1024">
            <img src="<?php echo $uploadurl."/builder-templates"."/images/b360bai_mobile.png"; ?>" class="">
        </div>
    </div>
    
    <style>
        #<?php echo $post->post_name; ?>
        {
            position: relative;
        }
    </style>
    <script>
        $(window).scroll(function(event) {  
            var el = $(".circle_01");
            if (($(window).scrollTop() + el.height()) >= (el.offset().top + el.height())) { 
                $(".circle-outer img").addClass("rotate_circle"); 
                $(".circle_core_layer img").addClass("rotate_circle_alternate"); 
            }
                console.log("scroll: "+($(window).scrollTop()+ el.height()) + " " + (el.offset().top + el.height())); 
        }); 
    </script>
</section>