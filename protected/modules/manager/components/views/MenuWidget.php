<?php foreach ($rows as $row): ?>
<h6 id="h-menu-bar-<?php echo $row->id; ?>" class="selected">
    <a href="#bar-<?php echo $row->id; ?>"><span><?php echo $row->name; ?></span></a>
</h6>
<ul id="menu-bar-<?php echo $row->id; ?>" class="opened">
    <li><a href="<?php echo Yii::app()->urlManager->createUrl('manager/subCategory/index', array('id' => $row->id)); ?>">分类管理</a></li>
    <li><a href="">Add Product</a></li>
    <li class="collapsible last">
        <a href="#" class="plus">Offers</a>
        <ul class="collapsed">
            <li><a href="">Coupon Codes</a></li>
            <li class="last"><a href="">Rebates</a></li>
        </ul>
    </li>
</ul>
<?php endforeach; ?>
<h6 id="h-menu-bar-100"><a href="#bar-100"><span>系统初始化</span></a></h6>
<ul id="menu-bar-100" class="closed">
    <li class="collapsible">
        <a href="#" class="collapsible minus">Sales</a>
        <ul id="whatever" class="expanded">
            <li><a href="">Today</a></li>
            <li><a href="">Yesterday</a></li>
            <li class="collapsible last">
                <a href="#" class="collapsible minus">Archive</a>
                <ul class="expanded">
                    <li><a href="">Last Week</a></li>
                    <li><a href="">Last Month</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li><a href="<?php echo Yii::app()->urlManager->createUrl('manager/category/add'); ?>">添加分类</a></li>
    <li class="last"><a href="<?php echo Yii::app()->urlManager->createUrl('manager/category'); ?>">栏目分类</a></li>
</ul>