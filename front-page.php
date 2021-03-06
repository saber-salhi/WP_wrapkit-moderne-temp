<?php get_header()?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <div class="topbar" id="top">
            <div class="header6">
                <div class="container po-relative">
                    <nav class="navbar navbar-expand-lg h6-nav-bar">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h6-info" aria-controls="h6-info" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                    </nav>
                </div>
            </div>
        </div>
        <!-- start page wraper -->
        <div class="page-wrapper"> 
            <div class="container-fluid">
                   <!-- start slide Section -->
    <?php if( get_theme_mod('wrapkit_header_section_display') == 'Yes'){ ?>
       <div class="wrap static-slider-head">
            <div class="overlay"></div> 
                <div id="slider">
                    <div class="slide slide-1" style="background-image:url(<?php echo wp_get_attachment_url(get_theme_mod('wrapkit_header_image'))?>)">
                        <div class="slider-content">
                            <h1><?php echo get_theme_mod('wrapkit_header_title_headline')?></h1>
                            <p class="subtitle font-light">
                                <?php echo  get_theme_mod('wrapkit_header_desc_headline') ?>
                            </p>
                            <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20 link-slider" data-toggle="collapse" href="<?php echo the_permalink(get_theme_mod('wrapkit_link_page')) ?>">
                                <span><?php echo get_theme_mod('wrapkit_text_of_link_1')?><i class="ti-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="slide slide-2" style="background-image:url(<?php echo wp_get_attachment_url(get_theme_mod('wrapkit_slide_image_2'))?>)">
                        <div class="slider-content">
                            <h1><?php echo get_theme_mod('wrapkit_slider_2_title_headline') ?></h1>
                            <p class="subtitle font-light">
                                <?php echo get_theme_mod('wrapkit_slider_2_desc_headline')?>
                            </p>
                            <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20 link-slider" data-toggle="collapse" href="<?php echo the_permalink(get_theme_mod('wrapkit_link_page_2')) ?>">
                                <span><?php echo get_theme_mod('wrapkit_text_of_link_2')?><i class="ti-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="slide slide-3" style="background-image:url(<?php echo wp_get_attachment_url(get_theme_mod('wrapkit_slide_image_3'))?>)">
                        <div class="slider-content">
                            <h1><?php echo get_theme_mod('wrapkit_slider_3_title_headline')?></h1>
                            <p class="subtitle font-light"><?php echo get_theme_mod('wrapkit_slider_3_desc_headline')?></p>
                            <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20 link-slider" data-toggle="collapse" href="<?php echo the_permalink(get_theme_mod('wrapkit_link_page_3')) ?>">
                                <span><?php echo get_theme_mod('wrapkit_text_of_link_3')?><i class="ti-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="arrow" id="arrow-left"><i class="fa fa-arrow-circle-left"></i></div>
                    <div class="arrow" id="arrow-right"><i class="fa fa-arrow-circle-right"></i></div>
                </div>
       </div>
        <!-- end slide Section -->
    <?php } ?>
        <?php 
            $designPosts = new WP_Query('cat=4&posts_per_page=1');
            if($designPosts->have_posts()){
                while($designPosts->have_posts()){
                    $designPosts->the_post(); ?>
                <div class="spacer" id="timeismany"> <!-- spacer -->
                <div class="overlay"></div>
                    <div class="container"> <!-- container --> 
                        <div class="row justify-content-center"><!-- row -->
                            <div class="col-md-7 text-center"><!-- column -->
                            <h1 class="title"><?php the_title() ?></h1> 
                                <div class="clock"> <!--start clock section-->
                                    <div class="clock-face">
                                        <div class="hand hour-hand"></div>
                                        <div class="hand min-hand"></div>
                                        <div class="hand second-hand"></div>
                                        <div class="the-time">
                                            <div class="Seconds"></div>
                                            <div class="Minutes"></div>
                                            <div class="Hours"></div>
                                        </div>
                                    </div>
                                </div><!--end clock section-->
                            </div><!-- column -->
                        </div> <!-- row -->   
                    </div>   <!-- container --> 
                </div>  <!-- spacer -->
        <?php } } wp_reset_postdata(); ?>
<!-- facebook post here  -->
    <?php   $socialPosts = new WP_Query( 'cat=3&posts_per_page=1');
        if ($socialPosts->have_posts()){
        while($socialPosts->have_posts()){
            $socialPosts->the_post() ?>
            <div class="static-slider10 " style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>')"> 
                <div class="container"><!-- container -->
                    <div class="row justify-content-center ">   <!-- Row  --> 
                        <div class="col-md-6  align-self-center text-center" data-aos="fade-down" data-aos-duration="1200"><!-- Column -->      
                            <span class="label label-rounded label-inverse">
                                <?php if(has_tag()){
                                    the_tags('', ''. '');
                                } ?>
                            </span>
                            <h1 class="title"><?php the_title() ?>
                            </h1>
                            <h6 class="subtitle op-8"><?php the_excerpt() ?>
                            </h6>
                            <a class="btn btn-outline-light btn-rounded btn-md btn-arrow m-t-20" data-toggle="collapse" href="<?php the_permalink( $post->ID ) ?>">
                                <span>Do you Need Help? <i class="ti-arrow-right"></i>
                                </span>
                            </a>
                        </div> <!-- Column --> 
                    </div><!-- Row  --> 
                </div> <!-- container -->      
            </div><!-- End Static Slider 10  -->
    <?php } } wp_reset_postdata(); ?>               
                <!-- ============================================================== -->
                <!-- End Static Slider 10  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Static Slider 3  -->
                <!-- ============================================================== -->

    <!-- start works posts section -->
    <?php 
        $args = array( 'post_type' => 'works', 'posts_per_page' => 1, 'taxonomy' => 'work_service');
        $WorksPosts = new WP_Query($args);
        if( $WorksPosts->have_posts()) {
            while( $WorksPosts->have_posts()) {
                $WorksPosts->the_post() ?>
            <div class="static-slider3">
                <div class="container">
                    <!-- Row  -->
                    <div class="row justify-content-center ">
                        <!-- Column -->
                        <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                            <h1 class="title"><?php the_title( ) ?><b class="font-bold"><?php the_excerpt() ?></b> <span class="text-success-gradiant font-bold typewrite" data-period="2000" data-type='[ "Photoshop", "Web Application", "Web Designing", "Web Development" ]'></span></h1>
                            <a class="btn btn-success-gradiant btn-md btn-arrow m-t-20" data-toggle="collapse" href="<?php the_permalink( $post->ID ) ?>"><span>Checkout My Work <i class="ti-arrow-right"></i></span></a>
                        </div>
                        <!-- Column -->
                    </div>
                    <!-- Row  -->
                </div>
            </div>
    <?php } } wp_reset_postdata(); ?>
    <!-- End Business Real boost -->
       
    <?php     // $postsbusiness = array( 'post_type' => 9, 'posts_per_page' => 1);
        $businessPosts = new WP_Query('cat=9');
            if($businessPosts->have_posts()){
                while($businessPosts->have_posts()){
                    $businessPosts->the_post(); ?>
            <div class="bg-light">
            
                <section>
                    <div id="banner1" class="banner spacer">
                        <?php   
                            if (class_exists('MultiPostThumbnails')) : 
                            MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
                            endif;
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-lg-5 align-self-center" data-aos="fade-right" data-aos-duration="1500">
                                    <h2 class="title font-bold"><?php the_title() ?></h2>
                                    <p class="m-t-40 m-b-30"><?php the_excerpt() ?></p>
                                    <div class="m-t-40">
                                    <?php echo do_shortcode('[contact-form-7 id="111" title="Contact form 1"]' ) ?>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-6 align-self-center ml-auto" data-aos="fade-left" data-aos-duration="1500">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID) ) ?>" alt="We are Digital Agency" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
    <?php } } wp_reset_postdata() ?>
      <!-- End Business Real boost -->
                <!-- ============================================================== -->
       
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Feature 1  -->
                <!-- ============================================================== -->
                <div class="spacer feature4">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <span class="label label-danger label-rounded">Feature 1</span>
                                <h2 class="title">Awesome with Extra Ordinary Flexibility</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                            </div>
                        </div>
                        <!-- Row  -->
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-6 wrap-feature4-box">
                                <div class="card" data-aos="zoom-out-right" data-aos-duration="1200">
                                    <div class="card-body">
                                        <div class="icon-round bg-light-info"><i class="fa fa-star"></i></div>
                                        <h5 class="font-medium">Instant Solutions</h5>
                                        <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique pellentesque ipsum.</p>
                                        <a href="#" class="linking text-themecolor">Explore More<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-md-6 wrap-feature4-box">
                                <div class="card" data-aos="zoom-out-left" data-aos-duration="1200">
                                    <div class="card-body">
                                        <div class="icon-round bg-light-info"><i class="fa fa-check-circle"></i></div>
                                        <h5 class="font-medium">Powerful Techniques </h5>
                                        <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique pellentesque ipsum. </p>
                                        <a class="linking text-themecolor" href="#">Explore More <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Feature 1  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Feature 2  -->
                <!-- ============================================================== -->
                <div class="bg-light spacer feature20 up">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <span class="label label-success label-rounded">Feature 2</span>
                                <h2 class="title">Awesome with Extra Ordinary Flexibility</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                            </div>
                        </div>
                        <!-- Row  -->
                        <div class="row wrap-feature-20">
                            <!-- Column -->
                            <div class="col-lg-6" data-aos="flip-left" data-aos-duration="1200">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-body d-flex no-block">
                                                <div class="m-r-20"><img src="assets/images/features/feature13/img1.jpg" width="70" class="rounded" /></div>
                                                <div>
                                                    <h5 class="font-medium">Make your website in no-time with us.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <a href="" class="text-white linking bg-success-gradiant">Lets Talk <i class="ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-6" data-aos="flip-right" data-aos-duration="1200">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-body d-flex no-block">
                                                <div class="m-r-20"><img src="assets/images/features/feature13/img2.jpg" width="70" class="rounded" /></div>
                                                <div>
                                                    <h5 class="font-medium">Make your website in no-time with us.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <a href="" class="text-white linking bg-success-gradiant">Lets Talk <i class="ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-body d-flex no-block">
                                                <div class="m-r-20"><img src="assets/images/features/feature13/img3.jpg" width="70" class="rounded" /></div>
                                                <div>
                                                    <h5 class="font-medium">Make your website in no-time with us.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <a href="" class="text-white linking bg-success-gradiant">Lets Talk <i class="ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-body d-flex no-block">
                                                <div class="m-r-20"><img src="assets/images/features/feature13/img4.jpg" width="70" class="rounded" /></div>
                                                <div>
                                                    <h5 class="font-medium">Make your website in no-time with us.</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <a href="" class="text-white linking bg-success-gradiant">Lets Talk <i class="ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- Row  -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Feature 2  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Feature 3 -->
                <!-- ============================================================== -->
                <div class="spacer ">
                    <div class="container feature30">
                        <div class="row">
                            <div class="col-lg-10"><img src="assets/images/features/feature30/img1.jpg" class="rounded img-responsive" alt="wrappixel" /></div>
                            <div class="col-lg-5 col-md-7 text-center wrap-feature30-box" data-aos="fade-left" data-aos-duration="1800" data-aos-easing="linear">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <div class="p-20">
                                            <span class="label label-info label-rounded">Feature 3</span>
                                            <h3 class="title">The New way of Making Your Website in mins</h3>
                                            <p>You can relay on our amazing features list and also our customer services will be great experience. You will love it for sure.</p>
                                            <a class="btn btn-info-gradiant btn-md btn-arrow m-t-20" href="#"><span>Explore More <i class="ti-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Feature 3 -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- text  -->
                <!-- ============================================================== -->
                <div class="spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h1 class="title font-bold">Portfolio</h1>
                                <h6 class="subtitle">Here you can check Demos we created based on WrapKit. Its quite easy to Create your own dream website &amp; dashboard in No-time.</h6>
                            </div>
                        </div>        
                    </div>    
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Portfolio 1  -->
                <!-- ============================================================== -->
                <div class="spacer">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title">Our Recent work with three column</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                            </div>
                        </div>
                        <!-- Row  -->
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <a href="#" class="img-ho"><img class="card-img-top" src="assets/images/portfolio/img1.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Branding for Theme Designer</h5>
                                        <p class="m-b-0 font-14">Digital Marketing</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                                    <a href="#" class="img-ho"><img class="card-img-top" src="assets/images/portfolio/img2.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Button Designs Free</h5>
                                        <p class="m-b-0 font-14">Search Engine</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                                    <a href="#" class="img-ho"><img class="card-img-top" src="assets/images/portfolio/img3.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Branding & Co Agency</h5>
                                        <p class="m-b-0 font-14">Admin templates</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <a href="#" class="img-ho"><img class="card-img-top" src="assets/images/portfolio/img4.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Zukandre Phoniex</h5>
                                        <p class="m-b-0 font-14">Branding</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                                    <a href="#" class="img-ho"><img class="card-img-top" src="assets/images/portfolio/img5.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Sionage Mokcup</h5>
                                        <p class="m-b-0 font-14">Wll Mockup</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                                    <a href="#" class="img-ho"><img class="card-img-top" src="assets/images/portfolio/img6.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Hard Cover Book Mock</h5>
                                        <p class="m-b-0 font-14">Book Covers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Portfolio 1  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- text  -->
                <!-- ============================================================== -->
                <div class="spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h1 class="title font-bold">Pricing</h1>
                                <h6 class="subtitle">Here you can check Demos we created based on WrapKit. Its quite easy to Create your own dream website &amp; dashboard in No-time.</h6>
                            </div>
                        </div>        
                    </div>    
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Pricing 8  -->
                <!-- ============================================================== -->
                <div class="pricing8 spacer b-t">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <h2 class="title">Simple Pricing to make your Work Effective</h2>
                                <h6 class="subtitle">We offer 100% satisafaction and Money back Guarantee</h6>
                                
                            </div>
                        </div>
                        <!-- row  -->
                        <div class="row m-t-40">
                            <!-- column  -->
                            <div class="col-md-4 ml-auto pricing-box align-self-center">
                                <div class="card b-all ">
                                    <div class="card-body p-30 text-center">
                                        <h5>Regular Plan</h5>
                                        <sup>$</sup><span class="text-dark display-5">39</span>
                                        <h6 class="font-light font-14">YEARLY</h6>
                                        <p class="m-t-40">The Master license allows you to customize, store and even host your website using your platform</p>
                                        
                                    </div>
                                    <a class="btn btn-info-gradiant p-15 btn-arrow btn-block " data-toggle="collapse" href="#">CHOOSE PLAN </a>
                                </div>
                            </div>
                            <!-- column  -->
                            <!-- column  -->
                            <div class="col-md-4 ml-auto pricing-box align-self-center">
                                <div class="card b-all ">
                                    <div class="card-body p-30 text-center">
                                        <h5>Master Plan</h5>
                                        <sup>$</sup><span class="text-dark display-5">49</span>
                                        <h6 class="font-light font-14">YEARLY</h6>
                                        <p class="m-t-40">The Master license allows you to customize, store and even host your website using your platform</p>
                                        
                                    </div>
                                    <a class="btn btn-danger-gradiant p-15 btn-arrow btn-block " data-toggle="collapse" href="#">CHOOSE PLAN </a>
                                </div>
                            </div>
                            <!-- column  -->
                            <!-- column  -->
                            <div class="col-md-4 ml-auto pricing-box align-self-center">
                                <div class="card b-all ">
                                    <div class="card-body p-30 text-center">
                                        <h5>Premium Plan</h5>
                                        <sup>$</sup><span class="text-dark display-5">69</span>
                                        <h6 class="font-light font-14">YEARLY</h6>
                                        <p class="m-t-40">The Master license allows you to customize, store and even host your website using your platform</p>
                                        
                                    </div>
                                    <a class="btn btn-info-gradiant p-15 btn-arrow btn-block " data-toggle="collapse" href="#">CHOOSE PLAN </a>
                                </div>
                            </div>
                            <!-- column  -->
                        </div>   
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Pricing 8  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- text  -->
                <!-- ============================================================== -->
                <div class="spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h1 class="title font-bold">Team</h1>
                                <h6 class="subtitle">Here you can check Demos we created based on WrapKit. Its quite easy to Create your own dream website &amp; dashboard in No-time.</h6>
                            </div>
                        </div>        
                    </div>    
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Team 2  -->
                <!-- ============================================================== -->
                <div class="spacer team2">
                    <div class="container">
                        <div class="row justify-content-center m-b-30">
                            <div class="col-md-7 text-center">
                                <h2 class="title">Experienced & Professional Team</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <!-- column  -->
                            <div class="col-lg-3 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters">
                                        <div class="col-md-12 pro-pic" style="background:url(assets/images/team/t1.jpg) center center no-repeat / cover">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>   
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">Michael Doe</h5>
                                                <h6 class="subtitle">Property Specialist</h6>
                                                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                            </div>
                            <!-- column  -->
                            <!-- column  -->
                            <div class="col-lg-3 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters">
                                        <div class="col-md-12 pro-pic" style="background:url(assets/images/team/t2.jpg) center center no-repeat / cover">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>   
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">Michael Doe</h5>
                                                <h6 class="subtitle">Property Specialist</h6>
                                                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                            </div>
                            <!-- column  -->
                            <!-- column  -->
                            <div class="col-lg-3 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters">
                                        <div class="col-md-12 pro-pic" style="background:url('assets/images/team/t3.jpg') center center no-repeat / cover">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>   
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">Michael Doe</h5>
                                                <h6 class="subtitle">Property Specialist</h6>
                                                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                            </div>
                            <!-- column  -->
                            <!-- column  -->
                            <div class="col-lg-3 m-b-30">
                                    <!-- Row -->
                                    <div class="row no-gutters">
                                        <div class="col-md-12 pro-pic" style="background:url(assets/images/team/t4.jpg) center center no-repeat / cover">
                                            <div class="card-img-overlay">
                                                <ul class="list-inline">    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>   
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>    
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-t-10">
                                                <h5 class="title font-medium">Michael Doe</h5>
                                                <h6 class="subtitle">Property Specialist</h6>
                                                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                            </div>
                            <!-- column  -->
                        </div>
                        
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Team 2  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- text  -->
                <!-- ============================================================== -->
                <div class="spacer">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h1 class="title font-bold">Testimonial</h1>
                                <h6 class="subtitle">Here you can check Demos we created based on WrapKit. Its quite easy to Create your own dream website &amp; dashboard in No-time.</h6>
                            </div>
                        </div>        
                    </div>    
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Testimonial 3  -->
                <!-- ============================================================== -->
                <div class="testimonial3 spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h2 class="title">Check what our Customers are Saying</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                            </div>
                        </div>
                        <!-- Row  -->
                        <div class="row testi3 m-t-40">
                            <!-- item -->
                            <div class="col-lg-4 col-md-4" data-aos="fade-right">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <h6 class="font-light m-b-30">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                        <div class="d-flex no-block align-items-center">
                                            <span class="thumb-img"><img src="assets/images/testimonial/1.jpg" alt="wrapkit" class="circle"/></span>
                                            <div class="m-l-20">
                                                <h6 class="m-b-0 customer">Michelle Anderson</h6>
                                                <div class="font-10">
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-muted"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <!-- item -->
                            <div class="col-lg-4 col-md-4" data-aos="fade-up">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <h6 class="font-light m-b-30">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                        <div class="d-flex no-block align-items-center">
                                            <span class="thumb-img"><img src="assets/images/testimonial/2.jpg" alt="wrapkit" class="circle"/></span>
                                            <div class="m-l-20">
                                                <h6 class="m-b-0 customer">Mark mesty</h6>
                                                <div class="font-10">
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-muted"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <!-- item -->
                            <div class="col-lg-4 col-md-4" data-aos="fade-left">
                                <div class="card card-shadow">
                                    <div class="card-body">
                                        <h6 class="font-light m-b-30">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                        <div class="d-flex no-block align-items-center">
                                            <span class="thumb-img"><img src="assets/images/testimonial/3.jpg" alt="wrapkit" class="circle"/></span>
                                            <div class="m-l-20">
                                                <h6 class="m-b-0 customer">Limpsy adam</h6>
                                                <div class="font-10">
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-success"><i class="fa fa-star"></i></a>
                                                    <a href="" class="text-muted"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Testimonial 3  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- text  -->
                <!-- ============================================================== -->
                <div class="spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h1 class="title font-bold">Blog</h1>
                                <h6 class="subtitle">Here you can check Demos we created based on WrapKit. Its quite easy to Create your own dream website &amp; dashboard in No-time.</h6>
                            </div>
                        </div>        
                    </div>    
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Blog home 2  -->
                <!-- ============================================================== -->
                <div class="blog-home2 spacer">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center">
                            <!-- Column -->
                             <div class="col-md-8 text-center">
                                <h2 class="title">Recent Blogs</h2>
                                <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
                             </div>
                            <!-- Column -->
                        </div>
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card" data-aos="flip-left" data-aos-duration="1200">
                                    <a href="#"><img class="card-img-top" src="assets/images/blog/blog-home/img3.jpg" alt="wrappixel kit"></a>
                                    <div class="date-pos bg-info-gradiant">Oct<span>23</span></div>
                                    <h5 class="font-medium m-t-30"><a href="#" class="link">You should have eagle’s eye on new trends and techonogies</a></h5>
                                    <p class="m-t-20">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>    
                                    <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card" data-aos="flip-up" data-aos-duration="1200">
                                    <a href="#"><img class="card-img-top" src="assets/images/blog/blog-home/img2.jpg" alt="wrappixel kit"></a>
                                    <div class="date-pos bg-info-gradiant">Oct<span>23</span></div>
                                    <h5 class="font-medium m-t-30"><a href="#" class="link">New Seminar on Newest Food Recipe from World’s Best</a></h5>
                                    <p class="m-t-20">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>    
                                    <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">Learn More <i class="ti-arrow-right"></i></a>
                                </div> 
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card" data-aos="flip-right" data-aos-duration="1200">
                                    <a href="#"><img class="card-img-top" src="assets/images/blog/blog-home/img1.jpg" alt="wrappixel kit"></a>
                                    <div class="date-pos bg-info-gradiant">Oct<span>23</span></div>
                                    <h5 class="font-medium m-t-30"><a href="#" class="link">Learn from small things to create something bigger.</a></h5>
                                    <p class="m-t-20">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>    
                                    <a data-toggle="collapse" href="#" class="linking text-themecolor m-t-10">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Blog home 2  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- text  -->
                <!-- ============================================================== -->
                <div class="spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h1 class="title font-bold">Call-2-Action</h1>
                                <h6 class="subtitle">Here you can check Demos we created based on WrapKit. Its quite easy to Create your own dream website &amp; dashboard in No-time.</h6>
                            </div>
                        </div>        
                    </div>    
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Call-to-Action 7  -->
                <!-- ============================================================== -->
                <div class="mini-spacer bg-info text-white c2a7">
                    <div class="container">
                        <div class="d-flex">
                            <div class="display-7 align-self-center">Are you happy with what we offer? Ask for Free Quote</div>
                            <div class="ml-auto m-t-10 m-b-10"><button class="btn btn-outline-light btn-md">Ask for Quatation</button></div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Call-to-Action 7  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Feature 49  -->
                <!-- ============================================================== -->
                <div class="spacer feature42 bg-success-gradiant">
                    <div class="container">
                        <div class="row justify-content-center wrap-feature49-box">
                            <div class="col-md-10 col-lg-7 text-center" data-aos="fade-up">
                                <h2 class="title text-white">Grab our IOS or Android App from Stores</h2>
                                <h6 class="subtitle text-white op-7 m-b-20">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time.</h6>
                                <a href="" class="m-b-20"><img src="assets/images/features/feature48/app-strore.png" /></a>
                                <a href="" class="m-b-20"><img src="assets/images/features/feature48/play-store.png" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Feature 49  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- text  -->
                <!-- ============================================================== -->
                <div class="spacer bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center">
                                <h1 class="title font-bold">Contact Form</h1>
                                <h6 class="subtitle">Here you can check Demos we created based on WrapKit. Its quite easy to Create your own dream website &amp; dashboard in No-time.</h6>
                            </div>
                        </div>        
                    </div>    
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Contact 1  -->
                <!-- ============================================================== -->
                <div class="contact1">
                    <div class="row">
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619902.0054433027!2d-122.68851282163044!3d37.534535608111824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1507725785789" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                        </div>
                        <div class="container">
                            <div class="spacer">
                                <div class="row m-0">
                                    <div class="col-lg-8">
                                        <div class="contact-box p-r-40">
                                            <h4 class="title">Quick Contact</h4>
                                            <form data-aos="fade-left" data-aos-duration="1200">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group m-t-15">
                                                            <input class="form-control" type="text" placeholder="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group m-t-15">
                                                            <input class="form-control" type="text" placeholder="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-t-15">
                                                            <textarea class="form-control" rows="3" placeholder="message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-danger-gradiant m-t-20 btn-arrow"><span> SUBMIT <i class="ti-arrow-right"></i></span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="detail-box p-40 bg-info" data-aos="fade-right" data-aos-duration="1200">
                                            <h2 class="text-white">Wrappixel Headquarters</h2>
                                            <p class="text-white m-t-30 op-8">251 546 9442
                                                <br> info@wrappixel.com</p>
                                            <p class="text-white op-8">601 Sherwood Ave.
                                                <br> San Bernandino, CA 92404</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Contact 1  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Back to top -->
            <!-- ============================================================== -->
            <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       <?php get_footer() ?>