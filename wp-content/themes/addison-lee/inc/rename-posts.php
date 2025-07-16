<?php

function change_post_menu_label() {
    global $menu, $submenu;

    $menu[5][0] = 'Add Lib';
    $submenu['edit.php'][5][0] = 'Add Libs';
    $submenu['edit.php'][10][0] = 'New Add Lib';
    $submenu['edit.php'][16][0] = 'Add Lib Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Add Lib';
    $labels->singular_name = 'Add Lib';
    $labels->add_new = 'New Add Lib';
    $labels->add_new_item = 'New Add Lib';
    $labels->edit_item = 'Edit Add Lib';
    $labels->new_item = 'New Add Lib';
    $labels->view_item = 'View Add Lib';
    $labels->search_items = 'Search Add Lib';
    $labels->not_found = 'Not found';
    $labels->not_found_in_trash = 'Not found in trash';
}
add_action( 'init', 'change_post_object_label' );