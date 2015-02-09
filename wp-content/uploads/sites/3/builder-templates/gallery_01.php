<section id="<?php echo $post->post_name; ?>" class="gallery_01" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="gallery_01-title">
        <h1><?php the_title(); ?></h1>
        <?php echo the_content(); ?>        
    </div>
    <div class="gallery_01-wrapper">
        <ul class="bxslider">            
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
            <li><a href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
            <li><a href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
            <li><a href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
            <li><a href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
            <li><a href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
        </ul>
    </div>
    <div class="gallery_01-img-content">
        <h3><?php echo "TITLE CONON" ?></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem voluptates illo expedita assumenda nesciunt, quisquam.</p>
    </div>
    <div id="sliderthumb" class="gallery_01-wrapper-smaller">
        <div class="container">
            <div class="gallery_01_thumbnails">
                <ul class="bxslider2">
                    <li><a data-slide-index="0" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
                    <li><a data-slide-index="1" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
                    <li><a data-slide-index="2" href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
                    <li><a data-slide-index="3" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
                    <li><a data-slide-index="4" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
                    <li><a data-slide-index="5" href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
                    <li><a data-slide-index="6" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
                    <li><a data-slide-index="7" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
                    <li><a data-slide-index="8" href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
                    <li><a data-slide-index="9" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-5.jpg"/></a></li> 
                    <li><a data-slide-index="10" href="#"><img src="http://lorempixel.com/output/technics-q-c-790-360-2.jpg" alt=""></a></li>
                    <li><a data-slide-index="11" href="#"><img src="http://lorempixel.com/output/city-q-c-790-360-10.jpg" alt=""></a></li>
                     
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({ 
            pagerCustom: '.bxslider2'
        });

        $('.bxslider2').bxSlider({
            minSlides: 3,
            maxSlides: 7,
            slideWidth: 148,
            slideMargin: 0
        });
    });
</script>