<?php

acf_add_local_field_group([
    'key' => 'group_home_page_fields',
    'title' => 'Additional fields',
    'fields' => [
        // fields

        // main banner
        [
            'key' => 'f_home_tab_banner',
            'label' => 'Main banner',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_home_tab_banner_bg',
            'label' => 'Background image ',
            'name' => 'f_home_banner_gb',
            'type' => 'image',
        ],
        [
            'key' => 'f_home_tab_banner_video_mp4',
            'label' => 'Video mp4',
            'name' => 'f_home_banner_video_mp4',
            'type' => 'file',
            'instructions' => 'Video mp4',
            'required' => 0,
            'return_format' => 'url',
            'library' => 'all',
            'mime_types' => 'mp4, ogg',
        ],
        [
            'key' => 'f_home_tab_banner_video_webm',
            'label' => 'Video webm',
            'name' => 'f_home_banner_video_2',
            'type' => 'file',
            'instructions' => 'Video webm',
            'required' => 0,
            'return_format' => 'url',
            'library' => 'all',
            'mime_types' => 'webm',
        ],
        [
            'key' => 'f_home_tab_banner_title',
            'label' => 'Title h1',
            'name' => 'f_home_banner_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_tab_banner_sub_title',
            'label' => 'Sub title',
            'name' => 'f_home_banner_sub_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_tab_banner_p',
            'label' => 'Label line one',
            'name' => 'f_home_banner_p_1',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_tab_banner_p_2',
            'label' => 'Label line two',
            'name' => 'f_home_banner_p_2',
            'type' => 'text',
        ],
        // end main banner

        // welcome
        [
            'key' => 'f_home_tab_welcome',
            'label' => 'Welcome',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_home_welcome_title',
            'label' => 'Title',
            'name' => 'f_home_welcome_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_welcome_editor',
            'label' => 'Text',
            'name' => 'f_home_welcome_editor',
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
            'key' => 'f_home_welcome_link',
            'label' => 'Link',
            'name' => 'f_home_welcome_link',
            'type' => 'text',
        ],
        // end welcome

        // about
        [
            'key' => 'f_home_tab_about',
            'label' => 'About',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_home_about_title',
            'label' => 'Title',
            'name' => 'f_home_about_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_about_editor',
            'label' => 'Text',
            'name' => 'f_home_about_editor',
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
            'key' => 'f_home_about_img',
            'label' => 'Background image ',
            'name' => 'f_home_about_img',
            'type' => 'image',
        ],
        [
            'key' => 'f_home_about_repeater',
            'label' => 'Repeater',
            'name' => 'home_about_repeater_fields',
            'type' => 'repeater',
            'instructions' => 'Add multiple entries with three text fields',
            'required' => 0,
            'collapsed' => '',
            'min' => 4,
            'max' => 4,
            'button_label' => 'Add new entry',
            'sub_fields' => [
                [
                    'key' => 'f_home_about_repeater_field_text_1',
                    'label' => 'Number',
                    'name' => 'text_field_1',
                    'type' => 'text',
                    'required' => 1,
                    'wrapper' => [
                        'width' => '33%',
                    ],
                ],
                [
                    'key' => 'f_home_about_repeater_field_text_2',
                    'label' => 'Sign',
                    'name' => 'text_field_2',
                    'type' => 'text',
                    'required' => 0,
                    'wrapper' => [
                        'width' => '33%',
                    ],
                ],
                [
                    'key' => 'f_home_about_repeater_field_text_3',
                    'label' => 'Label',
                    'name' => 'text_field_3',
                    'type' => 'text',
                    'required' => 1,
                    'wrapper' => [
                        'width' => '33%',
                    ],
                ],
            ],
        ],
        [
            'key' => 'f_home_about_link',
            'label' => 'Link',
            'name' => 'f_home_about_link',
            'type' => 'text',
        ],
        // end about

        // let't get
        [
            'key' => 'f_home_tab_let',
            'label' => "Let's get",
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_home_let_title',
            'label' => 'Title',
            'name' => 'f_home_let_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_let_desc',
            'label' => 'Description',
            'name' => 'f_home_let_desc',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_let_img',
            'label' => 'Image ',
            'name' => 'f_home_let_img',
            'type' => 'image',
        ],
        // end let't get

        // portfolio
        [
            'key' => 'f_home_portfolio',
            'label' => "Portfolio",
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_home_portfolio_title',
            'label' => 'Title',
            'name' => 'f_home_portfolio_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_portfoli_relationship',
            'label' => 'Portfolio',
            'name' => 'portfolio',
            'type' => 'relationship',
            'post_type' => ['portfolio'],
            'filters' => ['search'],
            'return_format' => 'id',
            'required' => 0,
            'wrapper' => [
                'width' => '100%',
            ],
        ],
        [
            'key' => 'f_home_portfolio_des',
            'label' => 'Description',
            'name' => 'f_home_portfolio_des',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_portfolio_link',
            'label' => 'Link',
            'name' => 'f_home_portfolio_link',
            'type' => 'text',
        ],
        // end portfolio

        // services
        [
            'key' => 'f_home_services',
            'label' => "Services",
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_home_services_title',
            'label' => 'Title',
            'name' => 'f_home_services_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_services_text',
            'label' => 'Text',
            'name' => 'f_home_services_editor',
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
            'key' => 'f_home_services_link',
            'label' => 'Link',
            'name' => 'f_home_services_link',
            'type' => 'text',
        ],
        [
            'key' => 'f_home_service_repeater',
            'label' => 'Repeater',
            'name' => 'f_home_service_repeater_fields',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'collapsed' => '',
            'min' => 1,
            'max' => 10,
            'button_label' => 'Add new entry',
            'sub_fields' => [
                [
                    'key' => 'f_home_service_repeater_field_text_1',
                    'label' => 'Name',
                    'name' => 'name',
                    'type' => 'text',
                    'required' => 1,
                ],
            ],
        ],
        //end services

        // bootom
        [
            'key' => 'f_home_bottom',
            'label' => "Bottom",
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_home_bottom_picture',
            'label' => 'Image ',
            'name' => 'f_home_bottom_picture',
            'type' => 'image',
        ],
        // end bottom
    ],
    'location' => [
        [
            [
                'param' => 'page',
                'operator' => '==',
                'value' => '10',
            ],
        ],
    ],
]);
