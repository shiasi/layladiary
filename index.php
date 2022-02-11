<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
    <?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>
<!--
	'Layla's Diary' is a bludit theme by Shevina.
    Bulma CSS & Vanilla Javascript
	shevina.ir | @shevina.ir (instagram) | shevina.shiasi [at] gmail.com
	Released under the "GPL v3" license (https://www.gnu.org/licenses/gpl-3.0.en.html)
-->

<body>
    <!-- Load plugins with the hook siteBodyBegin -->
    <?php Theme::plugins('siteBodyBegin') ?>

    <!--- Header -->
    <header class="">
        <!-- Navbar -->
        <?php include(THEME_DIR_PHP . 'navbar.php'); ?>
    </header>



    <?php

    if ($WHERE_AM_I == 'page') {
        // check for front page
        if ($page->slug() == 'front' || $page->slug() == 'home') {
            include(THEME_DIR_PHP . 'front.php');
        } else {
            include(THEME_DIR_PHP . 'page.php');
        }
        // load the blog.php
    } else {
        include(THEME_DIR_PHP . 'blog.php');
    }

    ?>

    <!-- FOOTER -->
    <?php
    if ($WHERE_AM_I == 'page' && $page->slug() == 'front') {
        include(THEME_DIR_PHP . 'frontFooter.php');
    } else {
        include(THEME_DIR_PHP . 'footer.php');
    }

    ?>

    <!-- Load plugins with the hook siteBodyBegin -->
    <?php Theme::plugins('siteBodyEnd') ?>
    <?php echo Theme::js('assets/js/main.js'); ?>
</body>

</html>