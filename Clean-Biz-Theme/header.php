<!DOCTYPE html <?php language_attributes();?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name');?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- FontAwseome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head();?>
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
     
      <div class="header clearfix">
        <div class="container">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'depth' =>2,
              'container'=> false,
              'menu_class'=>'nav nav-pills pull-right',
              'fallback' => 'wp_bootstrap_navwalker::fallback',
              'walker' => new wp_bootstrap_navwalker()
            ));
          ?>
        <?php if(has_custom_logo()):?>
          <?php the_custom_logo();?>
        <?php else:?>
          <?php bloginfo('name');?>
        <?php endif;?>
        </div>
      </div>