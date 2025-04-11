<?php

acf_add_local_field_group([
    'key' => 'group_porfolio_page_fields',
    'title' => 'Additional fields',
    'fields' => [
        [
            'key' => 'f_portfolio_name',
            'label' => 'Name',
            'name' => 'f_portfolio_name',
            'type' => 'text',
        ],
        [
            'key' => 'f_portfolio_img',
            'label' => 'Image',
            'name' => 'f_portfolio_img',
            'type' => 'image',
        ],
        [
            'key' => 'f_portfolio_link',
            'label' => 'Link',
            'name' => 'f_portfolio_link',
            'type' => 'text',
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'portfolio',
            ],
        ],
    ],
    'position' => 'acf_after_title',
]);
