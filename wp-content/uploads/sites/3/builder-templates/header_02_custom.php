<?php
$upload_dir_data = wp_upload_dir();
$custom_templates_dir = $upload_dir_data['basedir'] . DIRECTORY_SEPARATOR . 'builder-templates';

$param  = "uploads";
$uploadurl = $upload_dir_data["baseurl"] ; 
?> 

<section id="<?php echo $post->post_name; ?>" class="header_02_custom section" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="container-fluid">
        <div class="row hideLEssthan1024" id="header_02_custom-frow">
            <div class="header_02_custom-columns">
                
            </div>
            <div class="header_02_custom-columns" id="center_h02col">
                
            </div>
            <div class="header_02_custom-columns">
                
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row showLessThan1024">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="ba_imagewrapper">    
                    <img src="<?php echo $uploadurl."/builder-templates"."/images/thebrandactioninc.png"; ?>" class="brand_headerimg img-responsive">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="ba_imagewrapper">    
                    <img src="<?php echo $uploadurl."/builder-templates"."/images/brand_group.png"; ?>" class="brand_headerimg img-responsive">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="ba_imagewrapper">    
                    <img src="<?php echo $uploadurl."/builder-templates"."/images/thebrand360.png"; ?>" class="brand_headerimg img-responsive">
                </div>
            </div>
        </div>
        <div class="container">
            <a href="" id="header_02_custom-btn" class="scoll-btn" data-anchor="2"> 
                <?php echo get_field('button_field'); ?>
            </a>            
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

    
    <!-- <div class="sidePanelMenu">
        <a id="menu-toggle" href="#" class="btn btn-default toggle"><i class="fa fa-bars"></i></a>
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <a id="menu-close" href="#" class="btn btn-default pull-right toggle"><i class="fa fa-times"></i></a>
                    <li class="sidebar-brand">
                    <a href="#"><?php the_title(); ?></a>
                    </li>
    
                    <?php while ( have_rows('menu_list') ) : the_row(); $post_object = get_sub_field('item_target'); ?>
                    <li>
                        <a href="#<?php echo $post_object->post_name; ?>" data-toggle="scroll"><?php the_sub_field('item_label'); ?></a>
                    </li>
                    <?php endwhile; ?>
    
                    <li class="divider"></li>
                    <?php if( get_field('menu_additional_details') ) : ?>
                    <li class="text-content">
                        <?php the_field('menu_additional_details'); ?>
                    </li>
                    <?php endif; ?>
    
                    <?php if( have_rows('social_list') ): ?>
                    <li>
                        <div class="col-sm-12 social-container">
                            <?php while ( have_rows('social_list') ) : the_row(); ?>
                                <a href="<?php the_sub_field('social_url'); ?>" target="_blank"><i class="fa fa-<?php the_sub_field('social_site'); ?> fa-2x"></i></a>
                            <?php endwhile; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
    </div> -->
</section>
<script type="text/javascript">
$(document).ready(function(){
    $("#<?php echo $post->post_name; ?>.header_02_custom #menu-close").click(function(e) {
        e.preventDefault();
        $("#<?php echo $post->post_name; ?>.header_02_custom #sidebar-wrapper").toggleClass("active");
    });

    $("#<?php echo $post->post_name; ?>.header_02_custom #menu-toggle").click(function(e) {
        e.preventDefault();
        $("#<?php echo $post->post_name; ?>.header_02_custom #sidebar-wrapper").toggleClass("active");
    });
});
</script>