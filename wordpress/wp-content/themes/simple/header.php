<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">    
        <title><?php bloginfo('name');?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
        <style>
            
        </style>
    </head>
    <body>
       <header>
           <div class="container">
                <h1 class="h1"><?php bloginfo('name'); ?></h1>
                <small><?php bloginfo('description');?></small>
            </div>
       </header>

       <nav class="main-nav">
           <div class="container">
               <?php $args = array('theme-location' => 'primary'); ?>
               <?php wp_nav_menu($args); ?>
           </div>
       </nav>