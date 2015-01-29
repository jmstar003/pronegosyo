<?php
    if(function_exists("register_field_group"))
    {
        register_field_group(array (
            'id' => 'acf_timeline_01-additional-content',
            'title' => 'Timeline_01 : Additional Content',
            'fields' => array (
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'custom_template',
                        'operator' => '==',
                        'value' => 'timeline_01',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array (
                'position' => 'normal',
                'layout' => 'no_box',
                'hide_on_screen' => array (
                    0 => 'the_content',
                ),
            ),
            'menu_order' => 0,
        ));
    }


    global $wp_query;
    wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'query_vars' => json_encode( $wp_query->query )
    ));

    add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
    add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );

    function my_ajax_pagination() 
    {
        $content = array();   

        if(isset($_POST['paged']))
        {
            $postcount = $_POST['paged'];            
        } 

        $args = array(
            'post_type'=>'post',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'offset' =>  $postcount,
            'order' => 'DESC',
            'orderby' => 'date'
        );

        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :
            $counter = 0;
            while ( $the_query->have_posts() ) : $the_query->the_post();
                $content[$counter] = array(
                        'page_id' => get_the_ID(),
                        'page_title' => get_the_title(),
                        'page_content' => remove_width_attribute(get_the_content())
                    );
                $counter++;
            endwhile;
        endif;

        echo json_encode($content);

        die();
    } 

    add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
    add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

    function remove_width_attribute( $html ) {
       $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
       return $html;
    }