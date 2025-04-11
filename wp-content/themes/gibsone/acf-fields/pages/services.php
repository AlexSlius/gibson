<?php

acf_add_local_field_group([
    'key' => 'group_services_page_fields',
    'title' => 'Additional fields',
    'fields' => [
        // fields

        // banner
        [
            'key' => 'f_servises_tab_banner',
            'label' => 'Banner',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_p_serv_bg',
            'label' => 'Background image ',
            'name' => 'f_p_serv_bg',
            'type' => 'image',
        ],
        [
            'key' => 'f_p_serv_title',
            'label' => 'Title h1',
            'name' => 'f_p_serv_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_p_serv_sub_title',
            'label' => 'Title right',
            'name' => 'f_p_serv_sub_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_p_serv_p',
            'label' => 'Description right',
            'name' => 'f_p_serv_p',
            'type' => 'text',
        ],
        // end banner

        // Consultative
        [
            'key' => 'f_ser_tab_consul',
            'label' => 'Consultative',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_ser_consul_title',
            'label' => 'Title h1',
            'name' => 'f_ser_consul_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_ser_consul_text',
            'label' => 'Text',
            'name' => 'f_ser_consul_editor',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'toolbar' => 'full',
            'media_upload' => 0,
            'default_value' => '',
            'tabs' => 'all',
            'max_width' => '',
            'min_width' => '',
            'max_height' => '',
            'min_height' => '',
        ],

        [
            'key' => 'f_ser_consul_repeater',
            'label' => 'Repeater',
            'name' => 'f_ser_consul_repeater_fields',
            'type' => 'repeater',
            'instructions' => 'Add multiple entries with three text fields',
            'required' => 0,
            'collapsed' => '',
            'layout' => 'row',
            'min' => 1,
            'button_label' => 'Add new entry',
            'sub_fields' => [
                [
                    'key' => 'f_ser_consul_repeater_title',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                    'required' => 1,
                ],
                [
                    'key' => 'f_ser_consul_repeater_text',
                    'label' => 'Text',
                    'name' => 'f_ser_consul_repeater_editor',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'toolbar' => 'full',
                    'media_upload' => 0,
                    'default_value' => '',
                    'tabs' => 'all',
                    'max_width' => '',
                    'min_width' => '',
                    'max_height' => '',
                    'min_height' => '',
                ],
                [
                    'key' => 'f_ser_consul_repeater_img',
                    'label' => 'Image',
                    'name' => 'f_ser_consul_repeater_im',
                    'type' => 'image',
                    'required' => 0,
                ],
            ],
        ],
        // end Consultative

        // Market
        [
            'key' => 'f_ser_tab_market',
            'label' => 'Market',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_ser_title',
            'label' => 'Title h1',
            'name' => 'f_ser_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_ser_market_text',
            'label' => 'Text',
            'name' => 'f_ser_market_editor',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'toolbar' => 'full',
            'media_upload' => 0,
            'default_value' => '',
            'tabs' => 'all',
            'max_width' => '',
            'min_width' => '',
            'max_height' => '',
            'min_height' => '',
        ],
        [
            'key' => 'f_ser_market_file',
            'label' => 'PDF',
            'name' => 'f_ser_market_file',
            'type' => 'file',
            'instructions' => '',
            'required' => 0,
            'return_format' => 'url',
            'library' => 'all',
            'mime_types' => 'pdf',
        ],
        // end market

        // bootom
        [
            'key' => 'f_serv_bottom',
            'label' => "Bottom",
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_serv_bottom_picture',
            'label' => 'Image ',
            'name' => 'f_serv_bottom_picture',
            'type' => 'image',
        ],
        // end bottom
    ],
    'location' => [
        [
            [
                'param' => 'page',
                'operator' => '==',
                'value' => '14',
            ],
        ],
    ],
]);
