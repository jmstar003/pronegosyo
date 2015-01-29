<!-- Testimonial 03 -->
<section id="<?php echo $post->post_name; ?>" class="testimonial_03" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
  <div class="container">
    <div class="row">
      <?php if ($display_title) : ?>
      <div class="col-sm-12">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
      <?php endif; ?>
      <div class="col-sm-12 details-container"><?php the_content(); ?></div>
    </div>
    <?php if( have_rows('testimonials_list') ): ?>
    <div class="row">
      <ul class="col-sm-12 slider-items">

        <?php while ( have_rows('testimonials_list') ) : the_row(); ?>
        <li class="col-sm-6 col-sm-offset-3 item">
          <blockquote class="quotation">
            <?php the_sub_field('item_description'); ?>
          </blockquote>
          <?php if( get_sub_field('item_action') ) : ?>
          <div class="clearfix"></div>
          <div class="action_container">
            <?php the_sub_field('item_action'); ?>
          </div>
          <?php endif; ?>
        </li>
        <?php endwhile; ?>

      </ul>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-sm-12 text-center slider_control">
        <span class="prev"></span>
        <span class="next"></span>
      </div>
    </div>
    <?php if( get_field('action_content') ) : ?>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 action-container">
        <?php the_field('action_content'); ?>
      </div>
    </div>
    <?php endif; ?>
  </div>

  <script>

    $(document).ready(function(){

      $('#<?php echo $post->post_name; ?>.testimonial_03 .slider-items').bxSlider({
        mode: 'fade',
        auto: true,
        pager: false,

        minSlides: 1,
        maxSlides: 1,

        prevSelector: '#<?php echo $post->post_name; ?>.testimonial_03 .slider_control .prev',
        prevText: '<i class="fa fa-chevron-left"></i>',

        nextSelector: '#<?php echo $post->post_name; ?>.testimonial_03 .slider_control .next',
        nextText: '<i class="fa fa-chevron-right"></i>',

        adaptiveHeight: true,
        slideMargin: 10
      });

    });

  </script>

</section>