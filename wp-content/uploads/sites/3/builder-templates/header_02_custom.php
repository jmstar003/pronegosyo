<section id="<?php echo $post->post_name; ?>" class="header_02_custom" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="container-fluid">
        <div class="row" id="header_02_custom-frow">
            <div class="header_02_custom-columns">
                
            </div>
            <div class="header_02_custom-columns" id="center_h02col">
                
            </div>
            <div class="header_02_custom-columns">
                
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <a href="" id="header_02_custom-btn">
                <?php echo get_field('button_field'); ?>
            </a>            
        </div> 
    </div>
</section>

<script>
    $("#<?php echo $post->post_name; ?>").css({
        "height":$(window).height()
    });

    $(window).load(function(){

        var cw = $('.header_02_custom-columns').outerWidth();
        $('.header_02_custom-columns').css({'height':cw+'px'});
         
        var cw = $('#center_h02col').outerWidth();
        $('#center_h02col').css({'height':cw+'px'}); 
    });
</script>