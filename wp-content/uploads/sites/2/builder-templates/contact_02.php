<!-- Contact 02 -->
<section id="<?php echo $post->post_name; ?>" class="contact_02" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
  <div class="container">
    <div class="row">
      <?php if ($display_title) : ?>
      <div class="col-sm-12">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
      <?php endif; ?>
      <div class="col-sm-12 details-container">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php if( have_rows('locations') ): ?>
  <div class="container-fluid map-container">
    <div class="acf-map">
      <?php while ( have_rows('locations') ) : the_row(); $location = get_sub_field('location'); $coordinates = explode(',', $location['coordinates']); ?>
      <div class="marker" data-lat="<?php echo $coordinates[0]; ?>" data-lng="<?php echo $coordinates[1]; ?>">
        <h4><?php the_sub_field('title'); ?></h4>
        <p class="address"><?php echo $location['address']; ?></p>
        <?php if( get_sub_field('description') ) : ?>
        <p><?php the_sub_field('description'); ?></p>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>
  <div class="container form-container">
    <div class="col-sm-12"><?php the_field('form_content'); ?></div>
  </div>

  <script type="text/javascript">
    var map;

    (function($) {

    /*
    *  render_map
    *
    *  This function will render a Google Map onto the selected jQuery element
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param $el (jQuery element)
    *  @return  n/a
    */

    function render_map( $el ) {

      // var
      var $markers = $el.find('.marker');

      // vars
      var args = {
        scrollwheel : false,
        zoom        : 16,
        center      : new google.maps.LatLng(0, 0),
        mapTypeId   : google.maps.MapTypeId.ROADMAP
      };

      // create map
      map = new google.maps.Map( $el[0], args);

      // add a markers reference
      map.markers = [];

      // add markers
      $markers.each(function(){

          add_marker( $(this), map );

      });

      // center map
      center_map( map );

    }

    /*
    *  add_marker
    *
    *  This function will add a marker to the selected Google Map
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param $marker (jQuery element)
    *  @param map (Google Map object)
    *  @return  n/a
    */

    function add_marker( $marker, map ) {

      // var
      var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

      // create marker
      var marker = new google.maps.Marker({
        position  : latlng,
        map     : map
      });

      // add to array
      map.markers.push( marker );

      // if marker contains HTML, add it to an infoWindow
      if( $marker.html() )
      {
        // create info window
        var infowindow = new google.maps.InfoWindow({
          content   : $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

          infowindow.open( map, marker );

        });
      }

    }

    /*
    *  center_map
    *
    *  This function will center the map, showing all markers attached to this map
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 4.3.0
    *
    *  @param map (Google Map object)
    *  @return  n/a
    */

    function center_map( map ) {

      // vars
      var bounds = new google.maps.LatLngBounds();

      // loop through all markers and create bounds
      $.each( map.markers, function( i, marker ){

        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

        bounds.extend( latlng );

      });

      // only 1 marker?
      if( map.markers.length == 1 )
      {
        // set center of map
          map.setCenter( bounds.getCenter() );
          map.setZoom( 16 );
      }
      else
      {
        // fit to bounds
        map.fitBounds( bounds );
      }

    }

    /*
    *  document ready
    *
    *  This function will render each map when the document is ready (page has loaded)
    *
    *  @type  function
    *  @date  8/11/2013
    *  @since 5.0.0
    *
    *  @param n/a
    *  @return  n/a
    */

    $(document).ready(function(){

      $('#<?php echo $post->post_name; ?> .acf-map').each(function(){

        render_map( $(this) );

      });

      // Resize sections on window resize
      jQuery(document).resize(function() {

        map.checkResize();
        center_map(map);

      });

    });

    })(jQuery);

$(document).ready(function(){
    $('#home, #who-we-are, #what-we-do, #bai-services, #brand-360, #brand360-services, #contact-us').css({
        "min-height":$(window).height()
    });
});
$(window).resize(function(){
    $('#home, #who-we-are, #what-we-do, #bai-services, #brand-360, #brand360-services, #contact-us').css({
        "min-height":$(window).height()
    }); 
});
  </script>
</section>