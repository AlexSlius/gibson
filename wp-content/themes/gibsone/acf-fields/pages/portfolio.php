<?php

acf_add_local_field_group([
    'key' => 'group_portfolio_page_fields',
    'title' => 'Additional fields',
    'fields' => [
        [
            'key' => 'f_p_port_bg',
            'label' => 'Background image ',
            'name' => 'f_p_port_bg',
            'type' => 'image',
        ],
        [
            'key' => 'f_p_port_title',
            'label' => 'Title h1',
            'name' => 'f_p_port_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_p_port_sub_title',
            'label' => 'Title right',
            'name' => 'f_p_port_sub_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_p_port_p',
            'label' => 'Description right',
            'name' => 'f_p_port_p',
            'type' => 'text',
        ],
        [
            'key' => 'f_p_port_bot_picture',
            'label' => 'Image bottom',
            'name' => 'f_p_port_bot_picture',
            'type' => 'image',
        ],
    ],
    'location' => [
        [
            [
                'param' => 'page',
                'operator' => '==',
                'value' => '12',
            ],
        ],
    ],
]);
