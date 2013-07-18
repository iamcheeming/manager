<!DOCTYPE html>
<html>
<head>
    <title>管理系统</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/resources/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/resources/css/style.css" media="screen" />
    <link id="color" rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/resources/css/colors/blue.css" />
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/jquery-1.7.min.js"></script>
    <!--[if IE]><script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/excanvas.min.js"></script><![endif]-->
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/jquery-ui-1.8.custom.min.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/jquery.ui.selectmenu.js"></script>
    <script src="/tinymce/tinymce.min.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/smooth.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/smooth.menu.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/smooth.table.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/smooth.form.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/smooth.dialog.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/smooth.autocomplete.js"></script>
    <script>
    $(function () {
        $("#date-picker").datepicker();

        // $("#box-tabs, #box-left-tabs").tabs();
    });
    </script>
</head>
<body>
<?php echo $content; ?>
</body>
</html>