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
    <script>window.jQuery || document.write('<script src="<?php echo $this->assetsUrl; ?>/assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="navbar" class="navbar navbar-fixed">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a href="javascript:;" class="brand">
                <small>
                    <i class="icon-desktop"></i>Manager System
                </small>
            </a>
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-reorder"></i>
            </a>
            <ul class="nav flaty-nav pull-right">
                <li class="user-profile">
                    <a data-toggle="dropdown" href="javascript:;" class="user-menu dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo $this->assetsUrl; ?>/img/demo/avatar/avatar1.jpg" />
                        <span class="hidden-phone" id="user_info"><?php echo Yii::app()->user->name; ?></span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="icon-time"></i>
                            Logined From 20:45
                        </li>
                        <li>
                            <a href="<?php echo $this->createUrl('admin/me'); ?>">
                                <i class="icon-user"></i>修改密码
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $this->createUrl('default/signout'); ?>">
                                <i class="icon-off"></i>退出登录
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php echo $content; ?>

<script src="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo $this->assetsUrl; ?>/assets/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo $this->assetsUrl; ?>/assets/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo $this->assetsUrl; ?>/js/flaty.js"></script>

</body>
</html>
