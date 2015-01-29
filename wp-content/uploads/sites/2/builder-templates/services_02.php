<!-- Services 02 -->
<section id="<?php echo $post->post_name; ?>" class="services_02" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
  <div class="container">
    <div class="row">
      <?php if ($display_title) : ?>
      <div class="col-sm-12">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
      <?php endif; ?>
      <div class="col-sm-12 details-container"><?php the_content(); ?></div>
    </div>
    <?php if( have_rows('services_list') ): ?>
    <div class="row">
      <div class="col-sm-12 list-container">
        <div class="row">
          <?php $counter = 1; while ( have_rows('services_list') ) : the_row(); ?>
          <div class="col-sm-6 list-item">
            <?php if( get_sub_field('item_image') ) : ?>
            <div class="col-sm-3">
              <img src="<?php the_sub_field('item_image'); ?>" class="img-circle img-responsive">
            </div>
            <div class="col-sm-9">
              <?php if( get_sub_field('item_title') ) : ?><h3 class="item-title"><?php the_sub_field('item_title'); ?></h3><?php endif; ?>
              <?php the_sub_field('item_description'); ?>
            </div>
            <?php else : ?>
            <div class="col-sm-12">
              <?php if( get_sub_field('item_title') ) : ?><h3 class="item-title"><?php the_sub_field('item_title'); ?></h3><?php endif; ?>
              <?php the_sub_field('item_description'); ?>
            </div>
            <?php endif; ?>
          </div>
          <?php if( $counter % 2 == 0 ) : ?>
            </div><div class="row">
          <?php endif; ?>
          <?php $counter++; endwhile; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>