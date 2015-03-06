<section id="<?php echo $post->post_name; ?>" class="action_01 section" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="container">
        <div class="action_01-title text-center">
            <img src="<?php echo get_field("logo"); ?>" class="" width="">
        </div>
        <div class="row">
            <div class="col-md-4 text-center action-01-items"> 
                <img src="<?php echo $uploadurl."/builder-templates"."/images/advertising.gif"; ?>" alt="">
                <div><p>Advertising</p></div>
            </div>
            <div class="col-md-4 text-center action-01-items">
                <img src="<?php echo $uploadurl."/builder-templates"."/images/mediabuying.gif"; ?>" class="">
                <div><p>Media</p></div>
            </div>
            <div class="col-md-4 text-center action-01-items">
                <img src="<?php echo $uploadurl."/builder-templates"."/images/event.gif"; ?>" class="">
                <div><p>Events</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center action-01-items">
                <img src="<?php echo $uploadurl."/builder-templates"."/images/branddevelopmnet.gif"; ?>" class="">
                <div><p>Brand<br>Development</p></div>
            </div>
            <div class="col-md-4 text-center action-01-items">
                <img src="<?php echo $uploadurl."/builder-templates"."/images/PR.gif"; ?>" class="">
                <div><p>PR</p></div>
            </div>
            <div class="col-md-4 text-center action-01-items">
                <img src="<?php echo $uploadurl."/builder-templates"."/images/tactical-marketing.gif"; ?>" class="">
                <div><p>Marketing<br>Consultancy</p></div>
            </div>
        </div>
        <div id="action_01-button-wrapper">
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