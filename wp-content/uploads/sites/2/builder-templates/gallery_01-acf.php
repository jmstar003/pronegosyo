<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_gallery-01-additional-content',
        'title' => 'Gallery 01 : Additional Content',
        'fields' => array (
            array (
                'key' => 'field_54d8ae0a7249e',
                'label' => 'Gallery Content',
                'name' => 'gallery_content',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_54d8ae3d7249f',
                        'label' => 'Image',
                        'name' => 'Title',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_54d8ae55724a0',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => 160,
                    ),
                    array (
                        'key' => 'field_54d8ae7c724a1',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'custom_template',
                    'operator' => '==',
                    'value' => 'gallery_01',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}

?>