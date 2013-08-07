<?php $this->beginContent('webroot.themes.manager.views.layouts.main'); ?>
<div id="header">
    <div id="logo">
        <h1><a href="javascript:;" title="Manager System">Manager System</a></h1>
    </div>
    <ul id="user">
        <li class="first"><a><?php echo Yii::app()->user->name; ?></a></li>
        <li><a href="<?php echo $this->createUrl('admin/me'); ?>">修改密码</a></li>
        <li class="highlight last"><a href="<?php echo $this->createUrl('default/signout'); ?>">退出登录</a></li>
    </ul>
    <div id="header-inner">
        <div class="corner tl"></div>
        <div class="corner tr"></div>
    </div>
</div>
<div id="content">
    <div id="left">
        <div id="menu">

            <?php $this->widget('MenuWidget'); ?>

        </div>
    </div>
    <div id="right">
        <?php echo $content; ?>
    </div>
</div>
<div id="footer">
    <p>Copyright &copy; 2013 Manager System. All Rights Reserved.</p>
</div>
<?php $this->endContent(); ?>