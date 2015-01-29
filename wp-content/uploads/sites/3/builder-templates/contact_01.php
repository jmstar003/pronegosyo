<!-- Contact 01 -->
<section id="<?php echo $post->post_name; ?>" class="contact_01" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
  <div class="container">
    <?php if ($display_title) : ?>
    <div class="row">
      <div class="col-sm-12">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-sm-6 form-container">
        <?php the_field('form_content'); ?>
      </div>
      <div class="col-sm-6 details-container">
        <?php the_content(); ?>
        <?php if( have_rows('social_list') ): ?>
        <div class="col-sm-12 social-container">
          <?php while ( have_rows('social_list') ) : the_row(); ?>
          <a href="<?php the_sub_field('social_url'); ?>" target="_blank"><i class="fa fa-<?php the_sub_field('social_site'); ?> fa-2x"></i></a>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>