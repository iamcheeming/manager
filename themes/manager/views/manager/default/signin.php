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
<body class="login-page">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div class="login-wrapper">
    <form id="form-login" action="<?php echo $this->createUrl('default/post'); ?>" method="post">
        <h3>Login to your account</h3>
        <hr/>
        <?php $this->renderPartial('../_flashes'); ?>
        <div class="control-group">
            <div class="controls">
                <input type="text" name="username" placeholder="Username" class="input-block-level" />
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <input type="password" name="password" placeholder="Password" class="input-block-level" />
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1" /> Remember me
                </label>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary input-block-level">Sign In</button>
            </div>
        </div>
    </form>
</div>
<script>window.jQuery || document.write('<script src="<?php echo $this->assetsUrl; ?>/assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
<script src="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap.min.js"></script>

</body>
</html>