<?php

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function theme_setup(){
    // Featured Image Support  
    add_theme_support('post-thumbnails');
    // Regsiter Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'THEMENAME')
    ));

}

add_action('after_setup_theme', 'theme_setup');
