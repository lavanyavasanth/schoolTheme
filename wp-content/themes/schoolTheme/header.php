<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <div id="slideout-menu">
            <ul>
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                    <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('/programs'); ?>">Programs</a></li>
                    <li><a href="<?php echo site_url('/admission'); ?>">Admission</a></li>
                    <li>
                        <input type="text" placeholder="search here">
                        <!-- <br>
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a> -->
                    </li>
                </ul>
    </div>
    <nav>
        <div id="logo">
            <a href="index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>      
        <ul>
            <li><a href="<?php echo site_url(''); ?>" <?php if(is_front_page()) echo 'class = "active"' ?>>Home</a></li>
            <li><a href="<?php echo site_url('/blog'); ?>"<?php if(get_post_type() == 'post') echo 'class = "active"' ?>>Blog</a></li>
            <li><a href="<?php echo site_url('/about'); ?>" <?php if(is_page('about')) echo 'class = "active"' ?>>About</a></li>
            <li><a href="<?php echo site_url('/programs'); ?>"<?php if(get_post_type() == 'program') echo 'class = "active"' ?>>Programs</a></li>
            <li><a href="<?php echo site_url('/admission'); ?>"<?php if(is_page('admission')) echo 'class = "active"' ?>>Admission</a></li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="searchbox">
            <input type="text" placeholder="search here">
    </div>
    <?php if(!is_front_page()){?>
    <main>
    <?php } ?> 