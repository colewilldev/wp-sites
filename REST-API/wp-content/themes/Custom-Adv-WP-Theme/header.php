<!DOCTYPE html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header>
      <div class="container">
        <h1>
          <a href="<?php echo home_url('/');?>">
            <?php bloginfo('name');?>
          </a>
          <small><?php bloginfo('description');?></small>
        </h1>
        <div class="h_right">
          <form method="get" action="<?php esc_url(home_url('/'));?>">
            <input type="text" placeholder="Search...">
          </form>
        </div>
      </div>
    </header>

     <nav class="nav main-nav">
      <div class="nav-container">
        <?php $args = array('theme_location' => 'primary'); ?>
        <?php wp_nav_menu($args);?> 
      </div>
    </nav>