<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 01.12.2014 - 18:52
 * Mail  : ulas@mail.com
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>fethiye.co | Administrator</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <base href="<?php echo base_url(); ?>"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="assets/administrator/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="assets/administrator/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/administrator/plugins/select2/select2-metronic.css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="assets/administrator/css/style-metronic.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
    <link href="assets/administrator/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="assets/administrator/css/print.css" rel="stylesheet" type="text/css" media="print"/>
    <link href="assets/administrator/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="header-inner">
<!-- BEGIN LOGO -->
<a class="navbar-brand" href="<?php echo base_url(); ?>" style="padding: 0px">
    <img src="assets/images/logo.png" style="height: 45px" class="logo-default">
</a>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <img src="assets/administrator/img/menu-toggler.png" alt=""/>
</a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
<ul class="nav navbar-nav pull-right">
<!-- BEGIN NOTIFICATION DROPDOWN -->
<li class="dropdown" id="header_notification_bar">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="fa fa-warning"></i>
					<span class="badge">
						 6
					</span>
    </a>
    <ul class="dropdown-menu extended notification">
        <li>
            <p>
                You have 14 new notifications
            </p>
        </li>
        <li>
            <ul class="dropdown-menu-list scroller" style="height: 250px;">
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
									</span>
                        New user registered.
									<span class="time">
										 Just now
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                        Server #12 overloaded.
									<span class="time">
										 15 mins
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
									</span>
                        Server #2 not responding.
									<span class="time">
										 22 mins
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
									</span>
                        Application error.
									<span class="time">
										 40 mins
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                        Database overloaded 68%.
									<span class="time">
										 2 hrs
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                        2 user IP blocked.
									<span class="time">
										 5 hrs
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
									</span>
                        Storage Server #4 not responding.
									<span class="time">
										 45 mins
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
									</span>
                        System Error.
									<span class="time">
										 55 mins
									</span>
                    </a>
                </li>
                <li>
                    <a href="#">
									<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
                        Database overloaded 68%.
									<span class="time">
										 2 hrs
									</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="external">
            <a href="#">
                See all notifications <i class="m-icon-swapright"></i>
            </a>
        </li>
    </ul>
</li>
<!-- END NOTIFICATION DROPDOWN -->

<!-- BEGIN USER LOGIN DROPDOWN -->
<li class="dropdown user">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="" src="assets/administrator/img/avatar1_small.jpg"/>
					<span class="username">
						 <?php echo $this->session->userdata('name'); ?> <?php echo $this->session->userdata('surname'); ?>
					</span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="#">
                <i class="fa fa-user"></i> <?php echo $this->session->userdata('title'); ?>
            </a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a href="javascript:;" id="trigger_fullscreen">
                <i class="fa fa-arrows"></i> Full Screen
            </a>
        </li>

        <li>
            <a href="<?php echo base_url('administrator/logout'); ?>">
                <i class="fa fa-key"></i> Log Out
            </a>
        </li>
    </ul>
</li>
<!-- END USER LOGIN DROPDOWN -->
</ul>
<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
<div class="page-sidebar navbar-collapse collapse">
<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
<!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">

    <li class="start">
        <a href="<?php echo base_url('administrator/main'); ?>">
            <i class="fa fa-home"></i>
                            <span class="title">
                                Dashboard
                            </span>
                            <span class="selected">
                            </span>
        </a>
    </li>
    <li>
        <a href="javascript:;">
            <i class="fa fa-building-o"></i>
                            <span class="title">
                                Hotels
                            </span>
                            <span class="arrow ">
                            </span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo base_url('administrator/hotel/add'); ?>">
                    <i class="fa fa-plus-square"></i>
                    Add Hotel
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('administrator/hotel/list'); ?>">
                    <i class="fa fa-search"></i>
                    List All Hotels
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('administrator/hotel/extras'); ?>">
                    <i class="fa fa-sort-alpha-asc"></i>
                    Hotel Extras
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;">
            <i class="fa fa-home"></i>
						<span class="title">
							Real Estates
						</span>
						<span class="arrow ">
						</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo base_url('administrator/estate/add'); ?>">
                    <i class="fa fa-plus-square"></i>
                    Add Real Estate
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('administrator/estate/list'); ?>">
                    <i class="fa fa-search"></i>
                    List All Real Estates
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('administrator/estate/extras'); ?>">
                    <i class="fa fa-sort-alpha-asc"></i>
                    Real Estate Extras
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;">
            <i class="fa fa-users"></i>
						<span class="title">
							Users
						</span>
						<span class="arrow ">
						</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo base_url('administrator/user/add'); ?>">
                    <i class="fa fa-plus-square"></i>
                    Add User
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('administrator/user/list'); ?>">
                    <i class="fa fa-search"></i>
                    List All Users
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript:;">
            <i class="fa fa-wrench"></i>
						<span class="title">
							Settings
						</span>
						<span class="arrow ">
						</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo base_url('administrator/setting/metas'); ?>">
                    <i class="fa fa-tags"></i>
                    Meta Settings
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('administrator/setting/other'); ?>">
                    <i class="fa fa-terminal"></i>
                    Other Settings
                </a>
            </li>
        </ul>
    </li>

</ul>
<!-- END SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->