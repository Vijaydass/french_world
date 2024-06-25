<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="wide wow-animation desktop landscape rd-navbar-sidebar-linked" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <!-- <meta name="robots" content="index, follow"> -->

    <!-- <link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/fonts.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

    <?php get_header(); ?>

</head>

        <!-- breadcrumbs: only show when NOT on homepage -->
        <!-- <p class="breadcrumbs">
            <span class="wrapper">
                <a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp;
                <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
            </span>
        </p> -->

    <body class="rd-navbar-style-1" id="<?php get_page_slug(); ?>">
        <div class="preloader loaded">
            <div class="preloader-body">
                <div class="cssload-spinner"><span class="cssload-cube cssload-cube0"></span><span
                        class="cssload-cube cssload-cube1"></span><span class="cssload-cube cssload-cube2"></span><span
                        class="cssload-cube cssload-cube3"></span><span class="cssload-cube cssload-cube4"></span><span
                        class="cssload-cube cssload-cube5"></span><span class="cssload-cube cssload-cube6"></span><span
                        class="cssload-cube cssload-cube7"></span><span class="cssload-cube cssload-cube8"></span><span
                        class="cssload-cube cssload-cube9"></span><span class="cssload-cube cssload-cube10"></span><span
                        class="cssload-cube cssload-cube11"></span><span
                        class="cssload-cube cssload-cube12"></span><span
                        class="cssload-cube cssload-cube13"></span><span
                        class="cssload-cube cssload-cube14"></span><span class="cssload-cube cssload-cube15"></span>
                </div>
                <h2 class="preloader-title">DePaletra</h2>
            </div>
        </div>
        <div class="page animated" style="animation-duration: 500ms;">
            <!-- Page Header-->
            <header class="page-header">
                <!-- RD Navbar-->
                <div class="rd-navbar-wrap" style="height: 94px;">
                    <nav class="rd-navbar rd-navbar-original rd-navbar-sidebar" data-layout="rd-navbar-sidebar"
                        data-device-layout="rd-navbar-sidebar" data-sm-layout="rd-navbar-sidebar"
                        data-sm-device-layout="rd-navbar-sidebar" data-md-layout="rd-navbar-sidebar"
                        data-md-device-layout="rd-navbar-sidebar" data-lg-layout="rd-navbar-sidebar"
                        data-lg-device-layout="rd-navbar-sidebar" data-xl-layout="rd-navbar-sidebar"
                        data-xl-device-layout="rd-navbar-sidebar" data-xxl-layout="rd-navbar-sidebar"
                        data-xxl-device-layout="rd-navbar-sidebar" data-lg-stick-up-offset="46px"
                        data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true"
                        data-xl-stick-up="true" data-xxl-stick-up="true" data-body-class="rd-navbar-style-1">
                        <div class="rd-navbar-main-outer">
                            <div class="rd-navbar-main">
                                <!-- RD Navbar Panel-->
                                <div class="rd-navbar-panel">
                                    <!-- RD Navbar Toggle-->
                                    <button class="rd-navbar-toggle toggle-original"
                                        data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                    <!-- RD Navbar Brand-->
                                    <div class="rd-navbar-brand">
                                        <a class="brand" href="<?php get_site_url(); ?>">
                                            <img class="brand-logo-desktop"
                                                src="<?php get_theme_url(); ?>/assets/img/logo-default-152x94.png"
                                                alt="" width="152" height="94"
                                                srcset="images/logo-default-304x188.png 2x">
                                            <img class="brand-logo-mobile"
                                                src="<?php get_theme_url(); ?>/assets/img/logo-default-152x65.png"
                                                alt="" width="152" height="65"
                                                srcset="images/logo-default-304x130.png 2x">
                                        </a>
                                    </div>
                                </div>
                                <div class="rd-navbar-nav-wrap toggle-original-elements">
                                    <div class="rd-navbar-nav-container">
                                        <!-- RD Navbar Nav-->
                                        <ul class="rd-navbar-nav">
											<?php get_navigation(get_page_slug(FALSE)); ?>
                                            <li class="rd-nav-item active">
                                                <a class="rd-nav-link"
                                                    href="https://ld-wt73.template-help.com/wt_prod-20956/index.html">Home</a>
                                            </li>
                                            <!-- <li class="rd-nav-item">
                                                <a class="rd-nav-link"
                                                    href="https://ld-wt73.template-help.com/wt_prod-20956/about.html">About</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                    href="https://ld-wt73.template-help.com/wt_prod-20956/single-project.html">Single
                                                    Project</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                    href="https://ld-wt73.template-help.com/wt_prod-20956/blog-post.html">Blog
                                                    post</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                    href="https://ld-wt73.template-help.com/wt_prod-20956/privacy-policy.html">Privacy
                                                    Policy</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                    href="https://ld-wt73.template-help.com/wt_prod-20956/contacts.html">Contacts</a>
                                            </li> -->
                                        </ul>
                                        <ul class="contacts-classic">
                                            <li>
                                                <div class="contacts-classic-title">Phone:</div><a href="tel:#">+1 (409)
                                                    987–5874</a>
                                            </li>
                                            <li>
                                                <div class="contacts-classic-title">E-mail:</div><a
                                                    href="mailto:#">info@demolink.org</a>
                                            </li>
                                            <li>
                                                <div class="contacts-classic-title">Follow Us:</div>
                                                <ul class="list-inline list-social list-inline-sm">
                                                    <li><a class="icon fa fa-linkedin"
                                                            href="https://ld-wt73.template-help.com/wt_prod-20956/#"></a>
                                                    </li>
                                                    <li><a class="icon fa fa-twitter"
                                                            href="https://ld-wt73.template-help.com/wt_prod-20956/#"></a>
                                                    </li>
                                                    <li><a class="icon fa fa-facebook"
                                                            href="https://ld-wt73.template-help.com/wt_prod-20956/#"></a>
                                                    </li>
                                                    <li><a class="icon fa fa-instagram"
                                                            href="https://ld-wt73.template-help.com/wt_prod-20956/#"></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav-custom rd-navbar-nav">
                            <li class="active"><a class="nav-custom-counter"
                                    href="#home"></a></li>
                            <li class=""><a class="nav-custom-counter"
                                    href="#about"></a></li>
                            <li class=""><a class="nav-custom-counter"
                                    href="#works"></a></li>
                            <li class=""><a class="nav-custom-counter"
                                    href="#team"></a></li>
                            <li class=""><a class="nav-custom-counter"
                                    href="#clients"></a></li>
                            <li><a class="nav-custom-counter"
                                    href="#projects"></a></li>
                            <li><a class="nav-custom-counter"
                                    href="#news"></a></li>
                            <li><a class="nav-custom-counter"
                                    href="#contacts"></a></li>
                        </ul>
                    </nav>
                </div>
            </header>