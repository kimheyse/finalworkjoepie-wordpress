<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>

		<!-- wrapper -->
		<div class="wrapper">

		    <div class="wide">
                <div class="header-img">
		<img class="btn-block" src="<?php bloginfo('stylesheet_url');?>/../img/joepie_banner.jpg" />

                </div>


                <!--Navbar-->
		<nav class="navbar navbar-light bg-faded">
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
                    &#9776;
                </button>
                <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                    <?php wp_nav_menu();?>
                </div>
            </nav>
                <!--END Navbar-->
            </div>
