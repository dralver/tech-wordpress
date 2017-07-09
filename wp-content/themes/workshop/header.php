<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="<?php echo HOME_DIR; ?>/" >
        <!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

        -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <!-- Site title
   ================================================== -->
        <title>Pure Mix - HTML CSS Template</title>

        <!-- Bootstrap CSS
   ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate CSS
   ================================================== -->
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Font Icons CSS
   ================================================== -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ionicons.min.css">

        <!-- Main CSS
   ================================================== -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Google web font
   ================================================== -->	
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    </head>
    <body>


        <!-- Preloader section
        ================================================== -->
        <div class="preloader">

            <div class="sk-spinner sk-spinner-pulse"></div>

        </div>


        <!-- Navigation section
        ================================================== -->
        <div class="nav-container">
            <nav class="nav-inner transparent">

                <div class="navbar">
                    <div class="container">
                        <div class="row">

                            <div class="brand">
                                <a href="index.html">Pure Mix</a>
                            </div>

                            <div class="navicon">
                                <div class="menu-container">

                                    <div class="circle dark inline">
                                        <i class="icon ion-navicon"></i>
                                    </div>

                                    <div class="list-menu">
                                        <i class="icon ion-close-round close-iframe"></i>
                                        <div class="intro-inner">
                                            <?php
                                            wp_nav_menu([
                                                'theme_location' => 'primary-menu',
                                                'menu_id' => 'main-menu',
                                                'container' => null,
                                                'menu_class' => '',
                                                'items_wrap' => '<ul id="nav-menu">%3$s</ul>'
                                            ]);
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </nav>
        </div>


        <!-- Header section
        ================================================== -->
        <section id="header" class="header-one">
            <div class="container">
                <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                        <div class="header-thumb">
                            <h1 class="wow fadeIn" data-wow-delay="1.6s">Lorem ipsum dolor</h1>
                            <h3 class="wow fadeInUp" data-wow-delay="1.9s">Six HTML pages included</h3>
                        </div>
                    </div>

                </div>
            </div>		
        </section>


