<!-- Call to Action 01 -->
<section id="<?php echo $post->post_name; ?>" class="call_to_action_01" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
  <div class="container">
    <?php if ($display_title) : ?>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h1 class="title" style="<?php echo $header_color; ?>"<?php echo $header_font; ?>><?php the_title(); ?></h1>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 details-container">
        <?php the_content(); ?>
      </div>
    </div>
    <?php if(get_field('action_content')) : ?>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 action-container">
        <?php the_field('action_content'); ?>
    </div>
    <?php endif; ?>
  </div>
</section>