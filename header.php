<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="<?php the_author_meta( 'nickname', 1 ) ?>" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo( 'title' ) ?></title>
    <?php wp_head() ?>
</head>

<body class="">
	<div class="header1 po-relative bg-dark">
        <div class="navbar-dark">
        <div class="container">
            <!-- Header 2 code -->
            <nav class="navbar navbar-expand-lg h2-nav ">
                <a href="<?php bloginfo('url') ?>" class="navbar-brand white-logo">
	                <img src="<?php echo wp_get_attachment_url(get_theme_mod('theme-logo')) ?>" 							alt="<?php bloginfo( 'title' ) ?>" /></a>
                <a href="<?php bloginfo('url') ?>" class="navbar-brand black-logo">
	                <img src="<?php echo wp_get_attachment_url(get_theme_mod('theme-logo-sticky')) ?>" alt="wrapkit" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#header1" aria-controls="navbarTogglerDemo02" 
                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                </button>

<!--                 <!-- start of menu --> 
<!--
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="author.php">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Work</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="h1-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Services <i class="fa fa-angle-down m-l-5"></i>
                                </a>
                            <ul class="b-none dropdown-menu animated fadeInUp">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a class="dropdown-item" href="#">One more separated link</a></li>

                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Freebies</a></li>
                        <li class="nav-item"><a class="btn btn-hire-me" href="#">Hire Me</a></li>
                    </ul>-->
                     <div class="collapse navbar-collapse" id="header1">	
				<?php 
					wp_nav_menu(array(
						'theme_location'  => 'header-menu',
						'menu_class'      => 'navbar-nav ml-auto mt-2 mt-lg-0',
						'container'		  => false
					));					
				?>
                     </div>
            </nav>
           </div> 
            <hr>
            <!-- End Header 1 code -->
        </div>
    </div>
