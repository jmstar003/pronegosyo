<section id="<?php echo $post->post_name; ?>" class="timeline_01" style="<?php echo $background_color . $background_image . $content_color; ?>" data-autoheight="<?php echo $autofill_height; ?>"<?php echo $content_font; ?>>
 
    
    <div class="container">     
         <?php if ($display_title) : ?> 
        <div class="page-header text-center">
            <h1 class="title" style="<?php echo $header_color; ?>"<?php echo $header_font; ?>><?php the_title(); ?></h1>
        </div>
        <?php endif; ?>   
        <ul class="timeline">             
            <li id="timeline-clearfixer" class="clearfix" style="float: none;"></li>
        </ul>

        <div class="text-center">
            <button class="time-line-morebtn" id="more">more</button>
        </div>
    </div>
</section>

<script>
    var ajaxpagination = {"ajaxurl":"http:\/\/templating.pronegosyo.local\/wp-admin\/admin-ajax.php"};
    var post_count = 0;
    (function($) {
        $(document).on( 'click', 'button#more', function( event ) {
            event.preventDefault();
            ajaxQuery(post_count);
        })
    })(jQuery); 

    var ajaxQuery = function(count)
    {
        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'ajax_pagination',
                paged: count
            },
            async:false,
            success: function( result ) { 
                post_count = post_count + 10;
                var data = jQuery.parseJSON(result);
                
                $.each(data, function(index, value) {
                    // $("#landingPad").append("<li>" + value + "</li>");
                    
                    append_timeline(index, value);
                });
                
            }
        });
    } 

    var append_timeline = function(index, elemObj)
    { 
        var elemString = '<li class="timeline-leftside">';
        var invert = "";
        
        if(Math.abs(index) % 2 == 1)
        { 
            invert = 'invert';
            elemString = '<li class="timeline-inverted">';
        } 
        
        elemString = elemString + ' <div class="timeline-badge primary"> <a id="timeline_postid_'+elemObj.page_id+'"> <i class="glyphicon glyphicon-record '+invert+'" rel="tooltip" id=""></i> </a> </div> <div class="timeline-panel"> <div class="timeline-body"><div><p><strong>'+elemObj.page_title+'</strong></p>'+elemObj.page_content+'</div> </div> </div> </li>';
        $(elemString).insertBefore( "#timeline-clearfixer" ).slideDown();
    }


    $(document).ready(function(){
        setTimeout(function(){ ajaxQuery(post_count); }, 1000);        
    });
</script>