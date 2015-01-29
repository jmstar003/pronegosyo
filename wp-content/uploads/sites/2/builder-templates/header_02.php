<!-- Header 02 -->
<section id="<?php echo $post->post_name; ?>" class="header_02" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
  <div class="container">
    <?php if ($display_title) : ?>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 details-container">
        <h2><?php the_content(); ?></h2>
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

  <!-- Offcanvas navigation -->
  <a id="menu-toggle" href="#" class="btn btn-default toggle"><i class="fa fa-bars"></i></a>
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <a id="menu-close" href="#" class="btn btn-default pull-right toggle"><i class="fa fa-times"></i></a>
      <li class="sidebar-brand">
        <!--
        <a href="#"><?php the_title(); ?></a>
        -->
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

  <script type="text/javascript">
    $(document).ready(function(){

      $("#<?php echo $post->post_name; ?>.header_02 #menu-close").click(function(e) {
          e.preventDefault();
          $("#<?php echo $post->post_name; ?>.header_02 #sidebar-wrapper").toggleClass("active");
        });

      $("#<?php echo $post->post_name; ?>.header_02 #menu-toggle").click(function(e) {
        e.preventDefault();
        $("#<?php echo $post->post_name; ?>.header_02 #sidebar-wrapper").toggleClass("active");
      });

    });
  </script>

</section>