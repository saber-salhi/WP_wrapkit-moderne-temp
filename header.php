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
<div class="animation">
<section class="loading-effect">
<div class="an">
<div class="first"></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</div>
</div>
	<div class="header1 po-relative bg-dark">
        <div class="navbar-dark">
        <div class="container-fluid" id="top-navbar">
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
                    <div class="collapse navbar-collapse" id="header1">	
                        <?php 
                            wp_nav_menu(array(
                                'theme_location'  => 'header-menu',
                                'menu_class'      => 'navbar-nav ml-auto mt-2 mt-lg-0',
                                'container'		  => false,
                                'walker'         => new Walker_Nav_Primary()
                            ));					
                        ?>
                    </div>
                </nav>
           </div> <!-- End Header 1 code -->
        </div>
    </div>
    <script>
        function navbarBlack(){
            var getNavbar = document.getElementById("top-navbar");
            if((document.URL) !== "<?php bloginfo( 'url' ) ?>/"){
                getNavbar.classList.add("black-bg");
                window.addEventListener('scroll', function(e){
                    if(window.scrollY > getNavbar.clientHeight){
                         getNavbar.classList.remove("black-bg");
                    }else{
                        getNavbar.classList.add("black-bg");
                    }
                }); 
            }
        }
        navbarBlack();
        </script>