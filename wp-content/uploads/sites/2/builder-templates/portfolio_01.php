<!-- Portfolio 01 -->
<section id="<?php echo $post->post_name; ?>" class="portfolio_01" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
  <div class="container">
    <div class="row">
      <?php if ($display_title) : ?>
      <div class="col-sm-12">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
      <?php endif; ?>
      <div class="col-sm-12 details-container"><?php the_content(); ?></div>
      <!-- Temporarily removed filter for BrandAction
      <div class="col-sm-12 filter-container">
        <ul class="filter-menu">
          <li><a class="filter" data-filter="all" href="#" class="active">All</a></li>
          <li><a class="filter" data-filter="apps" href="#">Apps</a></li>
          <li><a class="filter" data-filter="icons" href="#">Icons</a></li>
        </ul>
      </div>
      -->
    </div>
    <?php if( have_rows('portfolio_list') ): ?>
    <div class="row list-container">
      <ul class="list-items">

        <!-- Removed mix all [additional types] -->
        <?php $counter = 1; while ( have_rows('portfolio_list') ) : the_row(); ?>
        <li class="col-sm-3 item">
          <a id="<?php echo $post->post_name . '_' . $counter; ?>" href="<?php the_sub_field('item_link'); ?>" class="item_link">
            <div class="item_underlay">
              <img src="<?php the_sub_field('item_preview'); ?>" class="img-responsive">
              <i class="fa fa-plus fa-4x"></i>
            </div>
            <div class="item_info">
              <h3>
                <?php the_sub_field('item_name'); ?>
                <?php if( get_sub_field('item_description') ) : ?>
                <br><small><?php the_sub_field('item_description'); ?></small>
                <?php endif; ?>
              </h3>
            </div>
            <?php if( have_rows('item_content') ): ?>

            <?php while ( have_rows('item_content') ) : the_row(); ?>
              <?php if( get_sub_field('content_type') == 'inline' ) : ?>
              <div id="<?php echo md5(get_sub_field('content_html')); ?>" class="white-popup mfp-hide"><?php the_sub_field('content_html'); ?></div>
              <?php endif; ?>
            <?php endwhile; ?>

            <script>
              $(document).ready(function(){

                $('#<?php echo $post->post_name; ?>.portfolio_01 .list-items .item #<?php echo $post->post_name . '_' . $counter; ?>.item_link').magnificPopup({
                  items: [
                    <?php while ( have_rows('item_content') ) : the_row(); ?>
                      {
                        src: "<?php
                              switch(get_sub_field('content_type'))
                              {
                                case 'iframe'  : the_sub_field('content_link');   break;
                                case 'image'   : the_sub_field('content_image');  break;
                                case 'inline'  : echo '#' . md5(get_sub_field('content_html')); break;
                              }
                              ?>",
                        type: "<?php the_sub_field('content_type'); ?>"
                      },
                    <?php endwhile; ?>
                  ],
                  gallery: {
                    enabled: true
                  }
                });

              });
            </script>

            <?php endif; ?>
          </a>
        </li>
        <?php $counter++; endwhile; ?>

      </ul>
    </div>
    <?php endif; ?>
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

      /* Temporarily removed filter for BrandAction

      $('.portfolio_01 .list-items').mixitup();

      $('.portfolio_01 .filter-menu a.filter').click(function(e) {
        e.preventDefault();
      });

      $('.portfolio_01 .filter-menu a.filter').each(function() {

        var target_category = $(this).data('filter');
        var items_count = $('.portfolio_01 .list-items .item.mix.' + target_category).length;

        if(items_count == 0)
        {
          $(this).hide();
        }

      });
      */

    });

  </script>

</section>