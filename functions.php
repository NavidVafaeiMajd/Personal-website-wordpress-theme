<?php
define('TD' , get_template_directory_uri());

add_action('after_setup_theme' , 'my_them_register_menu');

function my_them_register_menu(){
    register_nav_menus(array(
        'primary' => 'منوی اصلی',
        'mobile' => 'منو موبایل'
    ));
}


add_action('after_setup_theme' , 'widget_setup_for_theme');

function widget_setup_for_theme(){
    add_theme_support('widgets');
}

?>