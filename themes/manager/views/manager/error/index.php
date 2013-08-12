<div class="box">
    <h2>Error <?php echo $code; ?></h2>
    <p>
        <?php echo CHtml::encode($message); ?>
    </p>
</div>


<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html class="no-js"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Page Not Found</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/assets/normalize/normalize.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/css/flaty.css">
    <link rel="stylesheet" href="<?php echo $this->assetsUrl; ?>/css/flaty-responsive.css">
    <script src="<?php echo $this->assetsUrl; ?>/assets/modernizr/modernizr-2.6.2.min.js"></script>
</head>
<body class="error-page">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="error-wrapper">
    <h4>Page Not Found<span>404</span></h4>
    <p>Oops! Sorry, that page couldn't be found.<br/>Is there a typo in the url? </p>
    <br/>
    <hr/>
    <p class="clearfix">
        <a href="javascript:history.back()" class="pull-left">← Back to previous page</a>
        <a href="<?php echo $this->createUrl('default/index'); ?>" class="pull-right">Go to dashboard</a>
    </p>
</div>
<script>window.jQuery || document.write('<script src="<?php echo $this->assetsUrl; ?>/assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
<script src="<?php echo $this->assetsUrl; ?>/assets/bootstrap/bootstrap.min.js"></script>

</body>
</html>