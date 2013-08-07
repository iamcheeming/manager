<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->pageTitle; ?></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->assetsUrl; ?>/resources/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->assetsUrl; ?>/resources/css/style.css" media="screen" />
    <link id="color" rel="stylesheet" type="text/css" href="<?php echo $this->assetsUrl; ?>/resources/css/colors/blue.css" />
    <script src="<?php echo $this->assetsUrl; ?>/resources/scripts/jquery-1.6.4.min.js"></script>
    <script src="<?php echo $this->assetsUrl; ?>/resources/scripts/jquery-ui-1.8.16.custom.min.js"></script>
    <script src="<?php echo $this->assetsUrl; ?>/resources/scripts/smooth.js"></script>
    <script>
    $(function() {
        $("input.focus").focus(function () {
            if (this.value == this.defaultValue) {
                this.value = "";
            } else {
                this.select();
            }
        });

        $("input.focus").blur(function () {
            if ($.trim(this.value) == "") {
                this.value = (this.defaultValue ? this.defaultValue : "");
            }
        });

        $("input:submit, input:reset").button();

        $("#form1").submit(function() {
            if ($("#username").val() == "") {
                $("#username").focus();
                return false;
            }
            if ($("#password").val() == "") {
                $("#password").focus();
                return false;
            }
            return true;
        });
    });
    </script>
</head>
<body>
<div id="login">
    <div class="title">
        <h5>Sign In to Manager</h5>
        <div class="corner tl"></div>
        <div class="corner tr"></div>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <div class="inner">
        <form action="<?php echo $this->createUrl('default/post'); ?>" method="post" id="form1">
            <div class="form">
                <div class="fields">
                    <div class="field">
                        <div class="label">
                            <label for="username">用户名:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="username" name="username" size="40" value="" class="focus" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="label">
                            <label for="password">密码:</label>
                        </div>
                        <div class="input">
                            <input type="password" id="password" name="password" size="40" value="" class="focus" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="checkbox">
                            <input type="checkbox" name="remember" value="1" />
                            <label for="remember">自动登录</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="submit" value="登录" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>