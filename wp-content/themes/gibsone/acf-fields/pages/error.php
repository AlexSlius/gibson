<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'    => 'Settings 404 page',
        'menu_title'    => 'Page 404',
        'menu_slug'     => '404-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
}

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_404_settings',
        'title' => 'Settings 404 of page',
        'fields' => [
            [
                'key' => 'f_error_title',
                'label' => 'Title',
                'name' => 'f_error_title',
                'type' => 'text',
            ],
            [
                'key' => 'f_error_sub_title',
                'label' => 'Sub Title',
                'name' => 'f_error_sub_title',
                'type' => 'text',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => '404-settings',
                ],
            ],
        ],
    ]);
endif;
