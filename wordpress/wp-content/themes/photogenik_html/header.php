<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel ="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="w3-container w3-teal">
            <div class="w3-row">
                <div class="w3-col m4 l9">
                    <h1><?php bloginfo('name');?></h1>
                </div>
                <div class="w3-col m3 l3">
                    <input type="text" class="w3-input" placeholder="Search...">
                </div>
            </div>
        </header>

        <div class="w3-row">
	  <div class="w3-col m3 l3">
	   <ul class="w3-ul">
	   	<li><a href="#">Nature</a></li>
	   	<li><a href="#">Animals</a></li>
	   	<li><a href="#">Objects</a></li>
	   	<li><a href="#">People</a></li>
	   	<li><a href="#">Abstract</a></li>
	   </ul>
	  </div>
	  <div class="w3-col m9 l9">
	   <div class="w3-row">