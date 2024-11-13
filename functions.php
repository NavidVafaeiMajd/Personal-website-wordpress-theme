<?php
define('TD' , get_template_directory_uri());

add_action('after_setup_theme' , 'my_them_register_menu');

function my_them_register_menu(){
    register_nav_menus(array(
        'primary' => 'منوی اصلی',
        'mobile' => 'منو موبایل'
    ));
}
?>