<?php

function create_portfolio_post_type()
{
    $labels = array(
        'name'               => 'Portfolios',
        'singular_name'      => 'Portfolio',
        'menu_name'          => 'Portfolios',
        'name_admin_bar'     => 'Portfolio',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Portfolio',
        'new_item'           => 'New Portfolio',
        'edit_item'          => 'Edit Portfolio',
        'view_item'          => 'View Portfolio',
        'all_items'          => 'All Portfolios',
        'search_items'       => 'Search Portfolios',
        'parent_item_colon'  => 'Parent Portfolios:',
        'not_found'          => 'No portfolios found.',
        'not_found_in_trash' => 'No portfolios found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
    );

    register_post_type('portfolio', $args);
}

add_action('init', 'create_portfolio_post_type');
