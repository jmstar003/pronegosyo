<section id="<?php echo $post->post_name; ?>" class="header_02 section" style="<?php echo $background_color . $background_image . $content_color; ?> background-size: cover;" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 header_02_columns">
                <div class="header_02background withanchor"><img src="<?php echo get_field('left_column_background'); ?>" class="img-responsive" alt=""></div>
                <a href="#brandaction-page" class="header_02Content scoll-btn" data-anchor="3">
                    <div class="display_table">
                        <div class="display_table_row">
                            <div>
                                <p><?php echo get_field('left_column_content'); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 header_02_columns">
                <div class="header_02background"><img src="<?php echo get_field('center_column_background'); ?>" class="img-responsive" alt=""></div>
                <div class="header_02Content">
                    <?php echo the_content(); ?>
                </div>
            </div>
            <div class="col-sm-3 header_02_columns">
                <div class="header_02background withanchor"><img src="<?php echo get_field('right_column_background'); ?>" class="img-responsive" alt=""></div>
                <a href="#brand-360" class="header_02Content scoll-btn" data-anchor="4">
                    <div class="display_table">
                        <div class="display_table_row">
                            <div>
                                <p><?php echo get_field('right_column_content'); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div> 
    </div>
    
    <?php

        $upload_dir_data = wp_upload_dir();
        $custom_templates_dir = $upload_dir_data['basedir'] . DIRECTORY_SEPARATOR . 'builder-templates';

        $param  = "uploads";
        $uploadurl = $upload_dir_data["baseurl"] ; 
    ?>
    <script>
        <?php if(get_field('allow_full-page_scrolling', 'option') == "Yes"){ ?>
        $("a.scoll-btn").click(function(){
            var anchor = $(this).data("anchor");
            $.fn.fullpage.moveTo(anchor);
            return false;
        });
        <?php } ?>

        $(window).load(function(){
            var imgbg = $(".withanchor > img").attr("src");
            var imgbghover = '<?php echo $uploadurl."/builder-templates"."/images/border_bg.png"; ?>';
            
            $("a.header_02Content").mouseenter(function(){
                // alert(imgbg);
                var _parent  = $(this).parent();
                var _child   = _parent.find(".withanchor");
                var _imgpath = _child.find("img");
                // alert(imgbghover);
                _imgpath.attr("src",imgbghover);
            }).mouseleave(function(){
                var _parent  = $(this).parent();
                var _child   = _parent.find(".withanchor");
                var _imgpath = _child.find("img");

                _imgpath.attr("src",imgbg);
                // alert(imgbghover); 
            });

            $("#<?php echo $post->post_name; ?>").css({
                "min-height":$(window).height() + 10
            }); 
        });

        $(window).scroll(function(event) {  
            var el = $("#<?php echo $post->post_name; ?>");
            /*if ($(window).scrollTop() >= (el.scrollTop() + el.height())) { 
                $(".header_02Content").addClass("header_02Content_loaded"); 
            } */
        }); 
    </script>
  
</section>