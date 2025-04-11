<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]);
}

acf_add_local_field_group([
    'key' => 'group_theme_options',
    'title' => 'Theme Options',
    'fields' => [
        // header
        [
            'key' => 'field_tab_header',
            'label' => 'Header',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'header_logo_black',
            'label' => 'Logo black',
            'name' => 'header_logo_black',
            'type' => 'image',
        ],
        [
            'key' => 'header_logo_light',
            'label' => 'Logo light',
            'name' => 'header_logo_light',
            'type' => 'image',
        ],
        [
            'key' => 'header_name_btn',
            'label' => 'Name button',
            'name' => 'header_name_btn',
            'type' => 'text',
        ],

        // footer
        [
            'key' => 'field_tab_footer',
            'label' => 'Footer',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'footer_logo_black',
            'label' => 'Logo',
            'name' => 'footer_logo',
            'type' => 'image',
        ],
        [
            'key' => 'footer_link_private',
            'label' => 'Link private',
            'name' => 'footer_link_private',
            'type' => 'text',
        ],
        [
            'key' => 'footer_copy',
            'label' => 'Text copy',
            'name' => 'footer_copy',
            'type' => 'text',
        ],

        // Contacts
        [
            'key' => 'field_tab_contacts',
            'label' => 'Contacts',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'footer_con_coordinates_name',
            'label' => 'Coordinates name',
            'name' => 'footer_con_coordin_name',
            'type' => 'text',
        ],
        [
            'key' => 'footer_con_address_name',
            'label' => 'Address name',
            'name' => 'footer_con_address_name',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'footer_con_address_link',
            'label' => 'Address link',
            'name' => 'footer_con_address_link',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'footer_con_phone_name',
            'label' => 'Phone name',
            'name' => 'footer_con_phone_name',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'footer_con_phone_number',
            'label' => 'Phone number',
            'name' => 'footer_con_phone_number',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'footer_con_email_name',
            'label' => 'Email name',
            'name' => 'footer_con_email_name',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'footer_con_email_link',
            'label' => 'Email link',
            'name' => 'footer_con_email_link',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],

        [
            'key' => 'footer_con_soc_f',
            'label' => 'Facebook',
            'name' => 'footer_con_soc_f',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'footer_con_soc_insta',
            'label' => 'Instagram',
            'name' => 'footer_con_soc_insta',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'footer_con_soc_linken',
            'label' => 'Linkedin',
            'name' => 'footer_con_soc_linken',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],

        // modal
        [
            'key' => 'field_tab_modal',
            'label' => 'Modal',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'modal_picture',
            'label' => 'Picture',
            'name' => 'modal_picture',
            'type' => 'image',
        ],
        [
            'key' => 'modal_title_pc',
            'label' => 'Title modal pc',
            'name' => 'modal_title_pc',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'modal_title_phone',
            'label' => 'Title modal phone',
            'name' => 'modal_title_phone',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'modal_title_successfull_title',
            'label' => 'Title successfull',
            'name' => 'modal_title_successfull_title',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'modal_sub_successfull_title',
            'label' => 'Sub title successfull',
            'name' => 'modal_sub_successfull_title',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],

        // let's form 
        [
            'key' => 'field_tab_lets',
            'label' => "Let's form",
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_tab_lets_title',
            'label' => 'Title',
            'name' => 'field_tab_lets_title',
            'type' => 'text',
        ],
        [
            'key' => 'field_tab_lets_sub_title',
            'label' => 'Sub title',
            'name' => 'field_tab_lets_sub_title',
            'type' => 'text',
        ],
    ],
    'location' => [
        [
            [
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-settings',
            ],
        ],
    ],
]);
