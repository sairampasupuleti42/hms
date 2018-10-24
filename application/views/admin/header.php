<?php
_logged();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo @$title;?> | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/iCheck/all.css">


    <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b><?php echo @$app_title;?></b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b><?php echo @$app_title;?></b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url() ?>dist/img/avatar5.png" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?php echo !empty($_SESSION['USER_NAME']) ? $_SESSION['USER_NAME'] : ''; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url() ?>dist/img/avatar5.png" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo !empty($_SESSION['USER_NAME']) ? $_SESSION['USER_NAME'] : ''; ?>

                                </p>
                                <small><?php echo !empty($_SESSION['USER_TYPE']) ? $_SESSION['USER_TYPE'] : '' ?></small>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url() . 'admin/profile' ?>"
                                       class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url() . 'admin/logout' ?>"
                                       class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li data-page="dashboard"><a href="<?php echo base_url('admin/'); ?>"><i
                                class="fa fa-circle-o text-aqua"></i> <span>Dashboard</span></a></li>
                <li data-page="bookings"><a
                            href="<?php echo !empty($_SESSION['USER_TYPE']) ? base_url($_SESSION['USER_TYPE']) . '/bookings/' : ''; ?>"><i
                                class="fa fa-circle-o text-aqua"></i> <span>Bookings</span></a></li>
            <!--    <li data-page="vendors"
                    class="<?php /*echo (isset($_SESSION) && $_SESSION['USER_TYPE'] == 'vendors') ? 'hide' : ''; */?>"><a
                            href="<?php /*echo (isset($_SESSION)) ? base_url($_SESSION['USER_TYPE']) : ''; */?>vendors/"><i
                                class="fa fa-circle-o text-aqua"></i> <span>Vendors</span></a></li>-->
                <li data-page="customers"><a
                            href="<?php echo (isset($_SESSION)) ? base_url($_SESSION['USER_TYPE']) : ''; ?>/customers/"><i
                                class="fa fa-circle-o text-aqua"></i> <span>Customers</span></a></li>
                <li data-page="hotels"><a
                            href="<?php echo (isset($_SESSION)) ? base_url($_SESSION['USER_TYPE']) : ''; ?>/hotels/"><i
                                class="fa fa-circle-o text-aqua"></i> <span>Hotels</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

