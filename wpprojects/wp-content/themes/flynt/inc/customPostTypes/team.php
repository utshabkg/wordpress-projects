<?php

/**
 * This is an example file showcasing how you can add custom post types to your Flynt theme.
 *
 * For a full list of parameters see https://developer.wordpress.org/reference/functions/register_post_type/ or use https://generatewp.com/post-type/ to generate the code for you.
 */

namespace Flynt\Team;

function registerTeam()
{
    $labels = [
        'name'                  => _x('Team', 'Post Type General Name', 'flynt'),
        'singular_name'         => _x('Team Member', 'Post Type Singular Name', 'flynt'),
        'menu_name'             => __('Team Members', 'flynt'),
        'name_admin_bar'        => __('Team Member', 'flynt'),
        'archives'              => __('Item Archives', 'flynt'),
        'attributes'            => __('Item Attributes', 'flynt'),
        'parent_item_colon'     => __('Parent Item:', 'flynt'),
        'all_items'             => __('All Items', 'flynt'),
        'add_new_item'          => __('Add New Item', 'flynt'),
        'add_new'               => __('Add New Team Member', 'flynt'),
        'new_item'              => __('New Team Member', 'flynt'),
        'edit_item'             => __('Edit Team Member', 'flynt'),
        'update_item'           => __('Update Team Member', 'flynt'),
        'view_item'             => __('View Team Member', 'flynt'),
        'view_items'            => __('View Team Members', 'flynt'),
        'search_items'          => __('Search Team Member', 'flynt'),
        'not_found'             => __('Not found', 'flynt'),
        'not_found_in_trash'    => __('Not found in Trash', 'flynt'),
        'featured_image'        => __('Featured Image', 'flynt'),
        'set_featured_image'    => __('Set featured image', 'flynt'),
        'remove_featured_image' => __('Remove featured image', 'flynt'),
        'use_featured_image'    => __('Use as featured image', 'flynt'),
        'insert_into_item'      => __('Insert into item', 'flynt'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'flynt'),
        'items_list'            => __('Items list', 'flynt'),
        'items_list_navigation' => __('Items list navigation', 'flynt'),
        'filter_items_list'     => __('Filter items list', 'flynt'),
    ];
    $args = [
        'label'                 => __('Post Type', 'flynt'),
        'description'           => __('Post Type Description', 'flynt'),
        'labels'                => $labels,
        'supports'              => ['title', 'editor', 'revisions', 'thumbnail'],
        'menu_icon'             => 'dashicons-businessman',
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'rewrite'               => ['with_front' => true, 'slug' => 'our-team'],
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    ];
    register_post_type('team', $args);
}

add_action('init', '\\Flynt\\Team\\registerTeam');
