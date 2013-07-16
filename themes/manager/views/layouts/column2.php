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
    <!-- end content / left -->
    <div id="left">
        <div id="menu">
            <h6 id="h-menu-products" class="selected"><a href="#products"><span>Products</span></a></h6>
            <ul id="menu-products" class="opened">
                <li><a href="">Manage Products</a></li>
                <li><a href="">Add Product</a></li>
                <li class="collapsible">
                    <a href="#" class="plus">Sales</a>
                    <ul class="collapsed">
                        <li><a href="">Today</a></li>
                        <li class="last"><a href="">Yesterday</a></li>
                    </ul>
                </li>
                <li class="collapsible last">
                    <a href="#" class="plus">Offers</a>
                    <ul class="collapsed">
                        <li><a href="">Coupon Codes</a></li>
                        <li class="last"><a href="">Rebates</a></li>
                    </ul>
                </li>
            </ul>
            <h6 id="h-menu-pages"><a href="#pages"><span>Pages</span></a></h6>
            <ul id="menu-pages" class="closed">
                <li><a href="">Manage Pages</a></li>
                <li><a href="">New Page</a></li>
                <li class="collapsible last">
                    <a href="#" class="plus">Help</a>
                    <ul class="collapsed">
                        <li><a href="">How to Add a New Page</a></li>
                        <li class="last"><a href="">How to Add a New Page</a></li>
                    </ul>
                </li>
            </ul>
            <h6 id="h-menu-events"><a href="#events"><span>Events</span></a></h6>
            <ul id="menu-events" class="closed">
                <li><a href="">Manage Events</a></li>
                <li class="last"><a href="">New Event</a></li>
            </ul>
            <h6 id="h-menu-links"><a href="#links"><span>Links</span></a></h6>
            <ul id="menu-links" class="closed">
                <li><a href="">Manage Links</a></li>
                <li class="last"><a href="">Add Link</a></li>
            </ul>
            <h6 id="h-menu-settings"><a href="#settings"><span>Settings</span></a></h6>
            <ul id="menu-settings" class="closed">
                <li><a href="">Manage Settings</a></li>
                <li class="last"><a href="">New Setting</a></li>
            </ul>
        </div>
        <div id="date-picker"></div>
    </div>
    <!-- end content / left -->
    <div id="right">
        <?php echo $content; ?>
    </div>
</div>
<div id="footer">
    <p>Copyright &copy; 2013 Manager System. All Rights Reserved.</p>
</div>
<?php $this->endContent(); ?>