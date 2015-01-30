<section id="<?php echo $post->post_name; ?>" class="header_02" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="container-fluid">
        <table class="header_02-table">
            <tr>
                <td class="header_02-columns col-md-3" style="background: url(<?php echo get_field('left_column_background'); ?>) no-repeat center center;  -webkit-background-size:100%; -moz-background-size:95%; -o-background-size:95%; background-size:95%; ">
                    
                </td>
                <td class="header_02-columns col-md-4" style="background: url(<?php echo get_field('center_column_background'); ?>) no-repeat center center;  -webkit-background-size:97%; -moz-background-size:97%; -o-background-size:97%; background-size:97%; ">
                    <?php if (get_the_content()): ?>
                        <?php echo get_the_content(); ?>
                    <?php endif ?>
                </td>
                <td class="header_02-columns col-md-3" style="background: url(<?php echo get_field('right_column_background'); ?>) no-repeat center center;  -webkit-background-size:100%; -moz-background-size:95%; -o-background-size:95%; background-size:95%; ">
                    
                </td>
            </tr>
        </table>
        <div class="container">
            <a href="" id="header_02-btn" style="background: url(<?php echo get_field('button_background'); ?>) no-repeat center center;  -webkit-background-size:100%; -moz-background-size:100%; -o-background-size:100%; background-size:100%;">
                <?php echo get_field('button_field'); ?>
            </a>
            
        </div>
    </div>
</section>

<script>
    $(window).load(function(){
         
        $("#<?php echo $post->post_name; ?>").css({
            "min-height":$(window).height() - 10
        });

        var outerHeight = $(".header_02-columns").outerWidth() + $(".header_02-columns").outerWidth() / 2;
        $(".header_02-table").height(outerHeight);
    });
</script>