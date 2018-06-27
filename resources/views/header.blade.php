<?php

        ?>
    <!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{{url('/')}}}/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{{url('/')}}}/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{{url('/')}}}/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="{{{url('/')}}}/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="{{{url('/')}}}/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="{{{url('/')}}}/assets/js/core/app.js"></script>
    {{--SELECT 2--}}
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/core/libraries/jquery_ui/interactions.min.js"></script>

    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="{{{url('/')}}}/assets/js/pages/form_select2.js"></script>

    <script type="text/javascript" src="{{{url('/')}}}/assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-default header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-puzzle3"></i>
                    <span class="visible-xs-inline-block position-right">Git updates</span>
                    <span class="status-mark border-pink-300"></span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        Git updates
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-350">
                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                <div class="media-annotation">4 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                            </div>

                            <div class="media-body">
                                Add full font overrides for popovers and tooltips
                                <div class="media-annotation">36 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                <div class="media-annotation">2 hours ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                <div class="media-annotation">Dec 18, 18:36</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Have Carousel ignore keyboard events
                                <div class="media-annotation">Dec 12, 05:46</div>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
        </ul>

        <div class="navbar-right">
            <p class="navbar-text">Morning, Victoria!</p>
            <p class="navbar-text"><span class="label bg-success">Online</span></p>

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bell2"></i>
                        <span class="visible-xs-inline-block position-right">Activity</span>
                        <span class="status-mark border-pink-300"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-heading">
                            Activity
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-menu7"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body width-350">
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
                                </div>

                                <div class="media-body">

                                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                    <div class="media-annotation">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>
                                </div>

                                <div class="media-body">
                                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                    <div class="media-annotation">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i class="icon-plus3"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch in <span class="text-semibold">Limitless</span> repository
                                    <div class="media-annotation">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i class="icon-truck"></i></a>
                                </div>

                                <div class="media-body">
                                    Shipping cost to the Netherlands has been reduced, database updated
                                    <div class="media-annotation">Feb 8, 11:30</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i class="icon-bubble8"></i></a>
                                </div>

                                <div class="media-body">
                                    New review received on <a href="#">Server side integration</a> services
                                    <div class="media-annotation">Feb 2, 10:20</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    <strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                    <div class="media-annotation">Feb 1, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bubble8"></i>
                        <span class="visible-xs-inline-block position-right">Messages</span>
                        <span class="status-mark border-pink-300"></span>
                    </a>

                    <div class="dropdown-menu dropdown-content width-350">
                        <div class="dropdown-content-heading">
                            Messages
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-compose"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body">
                            <li class="media">
                                <div class="media-left">
                                    <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    <span class="badge bg-danger-400 media-badge">5</span>
                                </div>

                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">James Alexander</span>
                                        <span class="media-annotation pull-right">04:58</span>
                                    </a>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    <span class="badge bg-danger-400 media-badge">4</span>
                                </div>

                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Margo Baker</span>
                                        <span class="media-annotation pull-right">12:16</span>
                                    </a>

                                    <span class="text-muted">That was something he was unable to do because...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Jeremy Victorino</span>
                                        <span class="media-annotation pull-right">22:48</span>
                                    </a>

                                    <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Beatrix Diaz</span>
                                        <span class="media-annotation pull-right">Tue</span>
                                    </a>

                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Richard Vango</span>
                                        <span class="media-annotation pull-right">Mon</span>
                                    </a>

                                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">














        {{--<!DOCTYPE html>--}}
{{--<html class="loading" lang="en" data-textdirection="rtl">--}}
{{--<head>--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">--}}
    {{--<meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">--}}
    {{--<meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">--}}
    {{--<meta name="author" content="PIXINVENT">--}}
    {{--<title>Crypto Dashboard - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin--}}
        {{--Dashboard--}}
    {{--</title>--}}
    {{--<link rel="apple-touch-icon" href="{{{url('/')}}}/images/ico/apple-icon-120.png">--}}
    {{--<link rel="shortcut icon" type="image/x-icon" href="{{{url('/')}}}/images/ico/favicon.ico">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"--}}
          {{--rel="stylesheet">--}}
    {{--<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"--}}
          {{--rel="stylesheet">--}}
    {{--<!-- BEGIN VENDOR CSS-->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{{url('/')}}}/css-rtl/vendors.css">--}}
    {{--<!-- END VENDOR CSS-->--}}
    {{--<!-- BEGIN MODERN CSS-->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{{url('/')}}}/css-rtl/app.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{{url('/')}}}/css-rtl/custom-rtl.css">--}}
    {{--<!-- END MODERN CSS-->--}}
    {{--<!-- BEGIN Page Level CSS-->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{{url('/')}}}/css-rtl/core/menu/menu-types/vertical-menu.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{{url('/')}}}/css-rtl/core/colors/palette-gradient.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{{url('/')}}}/vendors/css/cryptocoins/cryptocoins.css">--}}
    {{--<!-- END Page Level CSS-->--}}
    {{--<!-- BEGIN Custom CSS-->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{{url('/')}}}/css/style-rtl.css">--}}
    {{--<!-- END Custom CSS-->--}}
{{--</head>--}}
{{--<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"--}}
      {{--data-open="click" data-menu="vertical-menu" data-col="2-columns">--}}
{{--<!-- fixed-top-->--}}
{{--<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-gradient-x-primary navbar-shadow">--}}
    {{--<div class="navbar-wrapper">--}}
        {{--<div class="navbar-header">--}}
            {{--<ul class="nav navbar-nav flex-row">--}}
                {{--<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="navbar-brand" href="index.html">--}}
                        {{--<img class="brand-logo" alt="modern admin logo" src="{{{url('/')}}}/images/logo/logo.png">--}}
                        {{--<h3 class="brand-text">Modern Admin</h3>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item d-md-none">--}}
                    {{--<a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="navbar-container content">--}}
            {{--<div class="collapse navbar-collapse" id="navbar-mobile">--}}
                {{--<ul class="nav navbar-nav mr-auto float-left">--}}
                    {{--<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>--}}
                    {{--<li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>--}}
                    {{--<li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>--}}
                        {{--<ul class="mega-dropdown-menu dropdown-menu row">--}}
                            {{--<li class="col-md-2">--}}
                                {{--<h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>--}}
                                {{--<div id="mega-menu-carousel-example">--}}
                                    {{--<div>--}}
                                        {{--<img class="rounded img-fluid mb-1" src="{{{url('/')}}}/images/slider/slider-2.png"--}}
                                             {{--alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>--}}
                                        {{--<p class="news-content">--}}
                                            {{--<span class="font-small-2">January 26, 2018</span>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="col-md-3">--}}
                                {{--<h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Drill down menu</h6>--}}
                                {{--<ul class="drilldown-menu">--}}
                                    {{--<li class="menu-list">--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i> Page layouts & Templates</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>--}}
                                                {{--<ul>--}}
                                                    {{--<li><a class="dropdown-item" href="#"><i class="la la-bookmark-o"></i>  Second level</a></li>--}}
                                                    {{--<li><a href="#"><i class="la la-lemon-o"></i> Second level menu</a>--}}
                                                        {{--<ul>--}}
                                                            {{--<li><a class="dropdown-item" href="#"><i class="la la-heart-o"></i>  Third level</a></li>--}}
                                                            {{--<li><a class="dropdown-item" href="#"><i class="la la-file-o"></i> Third level</a></li>--}}
                                                            {{--<li><a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Third level</a></li>--}}
                                                            {{--<li><a class="dropdown-item" href="#"><i class="la la-clock-o"></i> Third level</a></li>--}}
                                                        {{--</ul>--}}
                                                    {{--</li>--}}
                                                    {{--<li><a class="dropdown-item" href="#"><i class="la la-hdd-o"></i> Second level, third link</a></li>--}}
                                                    {{--<li><a class="dropdown-item" href="#"><i class="la la-floppy-o"></i> Second level, fourth link</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a class="dropdown-item" href="sk-2-columns.html"><i class="ft-edit"></i> Page starter kit</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>--}}
                                            {{--<li>--}}
                                                {{--<a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Customer support center</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="col-md-3">--}}
                                {{--<h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>--}}
                                {{--<div id="accordionWrap" role="tablist" aria-multiselectable="true">--}}
                                    {{--<div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">--}}
                                        {{--<div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne"--}}
                                                                                                                 {{--aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>--}}
                                        {{--<div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne"--}}
                                             {{--aria-expanded="true">--}}
                                            {{--<div class="card-content">--}}
                                                {{--<p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon.--}}
                                                    {{--Jelly wafer jelly beans. Caramels chocolate cake liquorice--}}
                                                    {{--cake wafer jelly beans croissant apple pie.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"--}}
                                                                                                                 {{--href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>--}}
                                        {{--<div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo"--}}
                                             {{--aria-expanded="false">--}}
                                            {{--<div class="card-content">--}}
                                                {{--<p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu--}}
                                                    {{--dessert pie. Tiramisu macaroon muffin jelly marshmallow--}}
                                                    {{--cake. Pastry oat cake chupa chups.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"--}}
                                                                                                                   {{--href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>--}}
                                        {{--<div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree"--}}
                                             {{--aria-expanded="false">--}}
                                            {{--<div class="card-content">--}}
                                                {{--<p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes--}}
                                                    {{--lollipop macaroon. Cake dragée jujubes donut chocolate--}}
                                                    {{--bar chocolate cake cupcake chocolate topping.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li class="col-md-4">--}}
                                {{--<h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>--}}
                                {{--<form class="form form-horizontal">--}}
                                    {{--<div class="form-body">--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label class="col-sm-3 form-control-label" for="inputName1">Name</label>--}}
                                            {{--<div class="col-sm-9">--}}
                                                {{--<div class="position-relative has-icon-left">--}}
                                                    {{--<input class="form-control" type="text" id="inputName1" placeholder="John Doe">--}}
                                                    {{--<div class="form-control-position pl-1"><i class="la la-user"></i></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>--}}
                                            {{--<div class="col-sm-9">--}}
                                                {{--<div class="position-relative has-icon-left">--}}
                                                    {{--<input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">--}}
                                                    {{--<div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>--}}
                                            {{--<div class="col-sm-9">--}}
                                                {{--<div class="position-relative has-icon-left">--}}
                                                    {{--<textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>--}}
                                                    {{--<div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12 mb-1">--}}
                                                {{--<button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>--}}
                        {{--<div class="search-input">--}}
                            {{--<input class="input" type="text" placeholder="Explore Modern...">--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="nav navbar-nav float-right">--}}
                    {{--<li class="dropdown dropdown-user nav-item">--}}
                        {{--<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">--}}
                {{--<span class="mr-1">Hello,--}}
                  {{--<span class="user-name text-bold-700">username</span>--}}
                {{--</span>--}}
                            {{--<span class="avatar avatar-online">--}}
                  {{--<img src="{{{url('/')}}}/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>--}}
                            {{--<a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>--}}
                            {{--<a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>--}}
                            {{--<a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>--}}
                            {{--<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"--}}
                                                                       {{--aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>--}}
                            {{--<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>--}}
                            {{--<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>--}}
                            {{--<a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown dropdown-notification nav-item">--}}
                        {{--<a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>--}}
                            {{--<span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">--}}
                            {{--<li class="dropdown-menu-header">--}}
                                {{--<h6 class="dropdown-header m-0">--}}
                                    {{--<span class="grey darken-2">Notifications</span>--}}
                                {{--</h6>--}}
                                {{--<span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>--}}
                            {{--</li>--}}
                            {{--<li class="scrollable-container media-list w-100">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading">You have new order!</h6>--}}
                                            {{--<p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading red darken-1">99% Server load</h6>--}}
                                            {{--<p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading yellow darken-3">Warning notifixation</h6>--}}
                                            {{--<p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading">Complete the task</h6>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading">Generate monthly report</h6>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown dropdown-notification nav-item">--}}
                        {{--<a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>--}}
                        {{--<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">--}}
                            {{--<li class="dropdown-menu-header">--}}
                                {{--<h6 class="dropdown-header m-0">--}}
                                    {{--<span class="grey darken-2">Messages</span>--}}
                                {{--</h6>--}}
                                {{--<span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>--}}
                            {{--</li>--}}
                            {{--<li class="scrollable-container media-list w-100">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left">--}}
                        {{--<span class="avatar avatar-sm avatar-online rounded-circle">--}}
                          {{--<img src="{{{url('/')}}}/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading">Margaret Govan</h6>--}}
                                            {{--<p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left">--}}
                        {{--<span class="avatar avatar-sm avatar-busy rounded-circle">--}}
                          {{--<img src="{{{url('/')}}}/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading">Bret Lezama</h6>--}}
                                            {{--<p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left">--}}
                        {{--<span class="avatar avatar-sm avatar-online rounded-circle">--}}
                          {{--<img src="{{{url('/')}}}/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading">Carie Berra</h6>--}}
                                            {{--<p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left">--}}
                        {{--<span class="avatar avatar-sm avatar-away rounded-circle">--}}
                          {{--<img src="{{{url('/')}}}/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h6 class="media-heading">Eric Alsobrook</h6>--}}
                                            {{--<p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>--}}
                                            {{--<small>--}}
                                                {{--<time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>--}}
                                            {{--</small>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
