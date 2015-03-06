<section id="<?php echo $post->post_name; ?>" class="contact_03 section" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
    <div class="container">
        <div class="row">
            <?php if ($display_title) : ?>
            <div class="col-sm-12 contact_03-title">
                <h1 class="title"><?php the_title(); ?></h1>
                <p>Get in touch with us now and let's see how we can work together</p>
            </div>
            <?php endif; ?>
            <div class="col-sm-12 details-container">
                <?php the_content(); ?>                
            </div>
        </div>
    </div>
</section>