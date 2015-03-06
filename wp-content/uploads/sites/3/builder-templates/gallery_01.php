<section id="<?php echo $post->post_name; ?>" class="gallery_01 section" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="gallery_01-title">
        <h1><?php the_title(); ?></h1>
        <?php echo the_content(); ?>        
    </div>
    <div class="gallery_01-wrapper">
        <ul class="bxslider">             
            <?php
            $data = array();
            $counter = 0; 
            if( have_rows('gallery_content') ):
                while ( have_rows('gallery_content') ) : the_row();
                $data[$counter] = array("title" => get_sub_field('title'),"description" => get_sub_field('description'), "imgurl" => get_sub_field("image"));
             ?>
                    <li id="#<?php echo $counter; ?>"><img src="<?php echo the_sub_field('image'); ?>"/></li>  
                <?php $counter = $counter + 1; ?>
<?php           endwhile;  
            endif;  
            ?>
        </ul>
    </div>

    <div class="gallery_01-img-content">
        <h3><?php echo "TITLE CONON" ?></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem voluptates illo expedita assumenda nesciunt, quisquam.</p>
        <div class="gall-01-getintouch">
             <a href="#" id="gallery_01_custom-btn" class="scoll-btn" data-anchor="7"> 
                GET IN TOUCH<br>WITH US NOW
            </a>
        </div>
    </div> 
    <div id="sliderthumb" class="gallery_01-wrapper-smaller">
        <div class="container">
            <div class="gallery_01_thumbnails">
                <div class="bxslider2">
                <?php foreach ($data as $key => $value): ?> 
                    <a data-slide-index="<?php echo $key; ?>"><img src="<?php echo $value["imgurl"] ?>"/></a>  
                <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        <?php if (get_field('allow_full-page_scrolling', 'option') == "Yes"): ?>
        $("a").click(function(){
            var anchor = $(this).data("anchor");
            $.fn.fullpage.moveTo(anchor);
            return false;
        }); 
        <?php endif ?>

        var elContent = <?php echo json_encode($data,JSON_PRETTY_PRINT); ?>;
        // elContent = JSON.parse(elContent):
        console.log();
        $(document).ready(function(){
            slider = $('.bxslider').bxSlider({
                // pagerCustom: '.bxslider2',
                slideWidth: 700,
                adaptiveHeight: true,
                onSliderLoad: function(){
                    var item = elContent[0];

                    $(".gallery_01-img-content h3").html(item.title);
                    $(".gallery_01-img-content p").html(item.description);                 
                },
                onSlideAfter: function($slideElement, oldIndex, newIndex){ 
                    var item = elContent[newIndex];

                    $(".gallery_01-img-content h3").html(item.title);
                    $(".gallery_01-img-content p").html(item.description);
                }
            });

            $('.bxslider2').bxSlider({
                minSlides: 3,
                maxSlides: 4,
                slideWidth: 148,
                slideMargin: 0
            });

            $(".bxslider2 a").click(function(){
                // alert();
                var indexCount = $(this).data("slide-index");
                var item = elContent[indexCount];

                $(".gallery_01-img-content h3").html(item.title);
                $(".gallery_01-img-content p").html(item.description);

                // $('.bxslider').bxSlider();
                slider.goToSlide(indexCount);
            });
        });
    </script>
</section>