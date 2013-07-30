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
    $(document).ready(function () {
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
    <?php if (Yii::app()->user->hasFlash('error')): ?>
    <div class="messages">
        <div id="message-error" class="message message-error">
            <div class="image">
                <img src="<?php echo $this->assetsUrl; ?>/resources/images/icons/error.png" alt="Error" height="32" />
            </div>
            <div class="text">
                <h6>Error Message</h6>
                <span><?php echo Yii::app()->user->getFlash('error'); ?></span>
            </div>
            <div class="dismiss">
                <a href="#message-error"></a>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="inner">
        <form action="<?php echo Yii::app()->urlManager->createUrl('manager/default/post'); ?>" method="post">
            <div class="form">
                <div class="fields">
                    <div class="field">
                        <div class="label">
                            <label for="username">Username:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="username" name="username" size="40" value="" class="focus" />
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
                            <input type="checkbox" id="remember" name="remember" value="1" />
                            <label for="remember">Remember me</label>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="submit" value="Sign In" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>