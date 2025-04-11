<?php

acf_add_local_field_group([
    'key' => 'group_about_page_fields',
    'title' => 'Additional fields',
    'fields' => [
        // fields

        // banner
        [
            'key' => 'f_about_tab_banner',
            'label' => 'Banner',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_p_about_bg',
            'label' => 'Background image ',
            'name' => 'f_p_about_bg',
            'type' => 'image',
        ],
        [
            'key' => 'f_p_about_title',
            'label' => 'Title h1',
            'name' => 'f_p_about_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_p_about_sub_title',
            'label' => 'Title right',
            'name' => 'f_p_about_sub_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_p_about_p',
            'label' => 'Description right',
            'name' => 'f_p_about_p',
            'type' => 'text',
        ],
        // end banner

        // Leadership
        [
            'key' => 'f_about_tab_leader',
            'label' => 'Leadership',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_about_p_leader_title',
            'label' => 'Title',
            'name' => 'f_about_p_leader_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_about_p_text',
            'label' => 'Text',
            'name' => 'f_about_p_text_editor',
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
            'key' => 'f_about_p_img',
            'label' => 'Picture',
            'name' => 'f_about_p_img',
            'type' => 'image',
        ],
        [
            'key' => 'f_about_p_repeater',
            'label' => 'Repeater',
            'name' => 'f_about_p_repeater_fields',
            'type' => 'repeater',
            'instructions' => 'Add multiple entries with three text fields',
            'required' => 0,
            'collapsed' => '',
            'min' => 4,
            'max' => 4,
            'button_label' => 'Add new entry',
            'sub_fields' => [
                [
                    'key' => 'f_about_p_repeater_field_text_1',
                    'label' => 'Number',
                    'name' => 'text_field_1',
                    'type' => 'text',
                    'required' => 1,
                    'wrapper' => [
                        'width' => '33%',
                    ],
                ],
                [
                    'key' => 'f_about_p_repeater_field_text_2',
                    'label' => 'Sign',
                    'name' => 'text_field_2',
                    'type' => 'text',
                    'required' => 0,
                    'wrapper' => [
                        'width' => '33%',
                    ],
                ],
                [
                    'key' => 'f_about_p_repeater_field_text_3',
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
            'key' => 'f_about_p_bot_text',
            'label' => 'Label',
            'name' => 'f_about_p_bot_text',
            'type' => 'text',
        ],
        // end Leadership

        // Team
        [
            'key' => 'f_about_tab_team',
            'label' => 'Team',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_about_p_team_title',
            'label' => 'Label',
            'name' => 'f_about_p_team_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_about_p_team_text',
            'label' => 'Text',
            'name' => 'f_about_p_team_text_editor',
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
            'key' => 'f_about_p_team_repeater',
            'label' => 'Repeater',
            'name' => 'f_about_p_team_repeater_fields',
            'type' => 'repeater',
            'instructions' => 'Add multiple entries with three text fields',
            'required' => 0,
            'collapsed' => '',
            'min' => 1,
            'layout' => 'row',
            'button_label' => 'Add new entry',
            'sub_fields' => [
                [
                    'key' => 'f_about_p_team_name',
                    'label' => 'Number',
                    'name' => 'name',
                    'type' => 'text',
                    'required' => 1,
                ],
                [
                    'key' => 'f_about_p_team_position',
                    'label' => 'Sign',
                    'name' => 'position',
                    'type' => 'text',
                    'required' => 0,
                ],
                [
                    'key' => 'f_about_p_team_description',
                    'label' => 'Description',
                    'name' => 'f_about_p_team_description',
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
                    'key' => 'f_about_p_team_avatar',
                    'label' => 'Avatar',
                    'name' => 'f_about_p_team_avatar',
                    'type' => 'image',
                ],
            ],
        ],
        // end team

        // Exception
        [
            'key' => 'f_about_tab_except',
            'label' => 'Exception',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_about_except_title',
            'label' => 'Label',
            'name' => 'f_about_except_title',
            'type' => 'text',
        ],
        [
            'key' => 'f_about_except_text',
            'label' => 'Text',
            'name' => 'f_about_except_text',
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
            'key' => 'f_about_except_label',
            'label' => 'Label',
            'name' => 'f_about_except_label',
            'type' => 'text',
        ],
        // end Exception

        // bootom
        [
            'key' => 'f_about_bottom',
            'label' => "Bottom",
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'f_about_bottom_picture',
            'label' => 'Image ',
            'name' => 'f_about_bottom_picture',
            'type' => 'image',
        ],
        // end bottom
    ],
    'location' => [
        [
            [
                'param' => 'page',
                'operator' => '==',
                'value' => '16',
            ],
        ],
    ],
]);
