<!doctype html>
<html lang="en">
<head>
    <title>HMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>front-ui/css/style.css">
    <link rel="stylesheet" id="cpswitch" href="<?php echo base_url() ?>front-ui/css/orange.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>front-ui/css/responsive.css">
    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>front-ui/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>front-ui/css/owl.theme.css">
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>front-ui/css/flexslider.css" type="text/css"/>
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url() ?>front-ui/css/datepicker.css">
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="<?php echo base_url() ?>front-ui/css/magnific-popup.css">

</head>
<body id="hotel-homepage">
<!--====== LOADER =====-->
<div class="loader"></div>
<!--============= TOP-BAR ===========-->
<div id="top-bar" class="tb-text-grey">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li><span><i class="fa fa-map-marker"></i></span>Vijayawada, IN</li>
                        <li><span><i class="fa fa-phone"></i></span>+91 1234 4567 25</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="links">
                    <ul class="list-unstyled list-inline">
                        <?php
                        if(!empty($_SESSION) && !empty($_SESSION['CUSTOMER_ID'])){
                            ?>
                            <li><a href="#"><i class="fa fa-user-circle"></i> <?php echo @$_SESSION['CUSTOMER_NAME']?></a></li>
                            <li>
                                <a href="<?php echo base_url('signout');?>"><i class="fa fa-lock"></i>
                                Signout
                                </a>
                            </li>
                            <?php
                        }else {
                            ?>
                            <li>
                                <a href="<?php echo base_url('signin/') ?>"><span><i class="fa fa-lock"></i></span>Login</a>
                            </li>
                            <li><a href="<?php echo base_url('signup/') ?>"><span><i class="fa fa-plus"></i></span>Sign
                                    Up</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- end links -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end top-bar -->
<!--========================= FLEX SLIDER =====================-->
<section class="flexslider-container" id="flexslider-container-3">
    <div class="header-absolute">
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent" id="mynavbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="header-search hidden-lg">
                        <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <a href="#" class="navbar-brand"><span><i class="fa fa-hotel"></i>HMS</span></a>
                </div><!-- end navbar-header -->
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>">Home<span></span></a></li>
                        <li><a href="<?php echo base_url('hotels/'); ?>">Find from Hotels<span></span></a></li>

                        <li><a href="<?php echo base_url('contact/')?>" >Contact<span></span></a>
                        </li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->
    </div><!-- end header-absolute -->
    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav">
            <h2 id="web-name"><span><i class="fa fa-hotel"></i></span>HMS</h2>
            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->
                <li><a href="<?php echo base_url(); ?>">Home<span></span></a></li>
                <li><a href="<?php echo base_url('hotels/'); ?>">Find from Hotels<span></span></a></li>

                <li><a href="<?php echo base_url('contact/')?>" >Contact<span></span></a>
                </li>
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->












