<!DOCTYPE html>
<html>
<head>
    <title>管理系统</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/resources/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/resources/css/style.css" media="screen" />
    <link id="color" rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/resources/css/colors/blue.css" />
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/jquery-1.7.min.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/jquery-ui-1.8.custom.min.js"></script>
    <script src="<?php echo $this->module->assetsUrl; ?>/resources/scripts/smooth.js"></script>
    <script>
    $(function () {
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
    <div class="messages">
        <div id="message-error" class="message message-error">
            <div class="image">
                <img src="<?php echo $this->module->assetsUrl; ?>/resources/images/icons/error.png" alt="Error" height="32" />
            </div>
            <div class="text">
                <h6>Error Message</h6>
                <span>This is the error message.</span>
            </div>
            <div class="dismiss">
                <a href="#message-error"></a>
            </div>
        </div>
    </div>
    <div class="inner">
        <form action="<?php echo Yii::app()->urlManager->createUrl('manager/default/post'); ?>" method="post">
            <div class="form">
                <!-- fields -->
                <div class="fields">
                    <div class="field">
                        <div class="label">
                            <label for="username">Username:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="username" name="username" size="40" value="请输入用户名" class="focus" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="label">
                            <label for="password">Password:</label>
                        </div>
                        <div class="input">
                            <input type="password" id="password" name="password" size="40" value="" class="focus" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="checkbox">
                            <input type="checkbox" id="remember" name="remember" />
                            <label for="remember">Remember me</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="submit" value="Sign In" />
                    </div>
                </div>
                <!-- end fields -->
            </div>
        </form>
    </div>
    <!-- end login -->
</div>
</body>
</html>