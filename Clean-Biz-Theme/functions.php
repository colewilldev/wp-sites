<?php 
  require_once('wp_bootstrap_navwalker.php');

  // Theme Support

  function business_theme_setup(){
    // Logo
    add_theme_support('custom-logo');

    // Declares menus
    register_nav_menus(array(
      'primary' => __('Top Navbar Menu')
    ));
  }
 
  add_action('after_setup_theme', 'business_theme_setup');

require get_template_directory() . '/inc/customizer.php';