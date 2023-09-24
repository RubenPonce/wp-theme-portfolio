<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="nav-bar-container">
        <h1 class="logo"><a href="<?php echo site_url() ?>"><strong>Ann Arbor </strong>Web Design</a></h1>
        <nav class="main-navigation">
            <ul>
                <li <?php if (is_front_page()) echo 'class="current-menu-item"' ?>><a
                            href="<?php echo site_url('/') ?>">Home</a></li>
                <li <?php if (is_page('about-me') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>>
                    <a href="<?php echo site_url('/about-me') ?>">About Me</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
                <div class="vertical-line"></div>
                <li><a href="https://www.linkedin.com/in/rubenponce/" target="_blank"><i
                                class="fab fa-linkedin social"></i></a></li>
                <li><a href="https://x.com/krebdev" target="_blank"><i class="fab fa-twitter social"></i></a></li>
                <li><a href="https://github.com/rubenponce" target="_blank"><i class="fab fa-github social"></i></a>
                </li>
            </ul>
    </div>
</header>

