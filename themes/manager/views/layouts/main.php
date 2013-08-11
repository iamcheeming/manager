<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html class="no-js"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $this->pageTitle; ?></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/normalize/normalize.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/css/flaty.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/css/flaty-responsive.css">
    <script src="<?php echo $this->assetsUrl; ?>/assets/modernizr/modernizr-2.6.2.min.js"></script>
</head>
<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="navbar" class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a href="#" class="brand">
                <small>
                    <i class="icon-desktop"></i>
                    Manager System
                </small>
            </a>
            <a href="javascrit:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-reorder"></i>
            </a>
            <ul class="nav flaty-nav pull-right">

                <li class="hidden-phone">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <!-- <span class="badge badge-warning">4</span> -->
                    </a>
                    <ul class="pull-right dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="icon-ok"></i>
                            暂无安排
                        </li>
                        <li class="more">
                            <a href="javascript:;">See tasks with details</a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-phone">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt"></i>
                        <!-- <span class="badge badge-important">5</span> -->
                    </a>
                    <ul class="dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="icon-warning-sign"></i>
                            暂无通知
                        </li>
                        <li class="more">
                            <a href="javascript:;">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-phone">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope"></i>
                        <!-- <span class="badge badge-success">3</span> -->
                    </a>
                    <ul class="dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="icon-comments"></i>
                            暂无信息
                        </li>
                        <li class="more">
                            <a href="javascript:;">See all messages</a>
                        </li>
                    </ul>
                </li>
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo $this->assetsUrl; ?>/img/demo/avatar/avatar1.jpg" />
                        <span class="hidden-phone" id="user_info">Penny</span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="icon-time"></i>
                            Logined From 20:45
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                Account Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $this->createUrl('default/signout'); ?>">
                                <i class="icon-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php echo $content; ?>

<script>window.jQuery || document.write('<script src="<?php echo $this->assetsUrl; ?>/assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
<script src="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo $this->assetsUrl; ?>/assets/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo $this->assetsUrl; ?>/assets/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo $this->assetsUrl; ?>/js/flaty.js"></script>

</body>
</html>
