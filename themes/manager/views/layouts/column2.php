<?php $this->beginContent('webroot.themes.manager.views.layouts.main'); ?>
<div id="header">
    <div id="logo">
        <h1><a href="javascript:;" title="Manager System">Manager System</a></h1>
    </div>
    <ul id="user">
        <li class="first"><a href="">Account</a></li>
        <li><a href="">Messages (0)</a></li>
        <li><a href="<?php echo Yii::app()->urlManager->createUrl('manager/default/signout'); ?>">Logout</a></li>
        <li class="highlight last"><a href="/" target="_blank">View Site</a></li>
    </ul>
    <div id="header-inner">
        <div id="home">
            <a href="<?php echo Yii::app()->urlManager->createUrl('manager'); ?>" title="Home"></a>
        </div>
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