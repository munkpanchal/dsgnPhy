<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_theme_file_uri("/public/favicon.png") ?>">

    <!-- Page Title -->
    <title>
        <?php echo bloginfo('name'); ?>
    </title>
    <!-- Meta Title -->
    <!-- 
    <meta name="description" content="<?php echo bloginfo('description'); ?>">  -->
    <!-- Meta Description -->
    <meta name="description" content="<?php echo bloginfo('description'); ?>">


</head>



<body>

    <div class="fixed-bg -z-10" id="fixed-bg">
        <video playsinline autoplay muted loop>
            <source src="<?php echo get_theme_file_uri("/public/background2.mp4") ?>" type="video/mp4">webm">
            Your browser does not support the video tag.
        </video>
    </div>


    <!-- <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-box" data-cursor-box></div> -->

    <!-- <main class="website-main-content"> -->

    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php echo get_theme_file_uri("/public/logo-white.png") ?>" alt="DSGNPhy">

                    </a>
                </div>
                <div class="header-right">
                    <div class="btn _yellow text-black">let's talk</div>
                    <div class="btn ham-btn bg-white">
                        <div class="hamburger">
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php

    // echo wp_nav_menu(array(
    //     "theme_location" => "header_nav",
    //     "container" => false,
    //     "items_wrap" => '<ul class="header-nav-links">%3$s</ul>'
    // ))

    ?>