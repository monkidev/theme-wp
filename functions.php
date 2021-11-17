<?php

require get_template_directory() .  '/inc/themes.php';
require get_template_directory() .  '/inc/nav-walker.php';

function get_menu_items($menu_name)
{
    $menus = wp_get_nav_menus();
    list($menu) = array_values(array_filter($menus, function ($val) use ($menu_name) {
        return $val->slug == $menu_name;
    }));
    if ($menu) {
        $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
        return $menuitems;
    }
    return [];
}