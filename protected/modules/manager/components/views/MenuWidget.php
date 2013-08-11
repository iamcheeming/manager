<ul class="nav nav-list">
    <li>
        <form method="GET" class="search-form">
        <span class="search-pan">
            <button type="submit">
                <i class="icon-search"></i>
            </button>
            <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
        </span>
        </form>
    </li>
    <li class="active">
        <a href="<?php echo Yii::app()->urlManager->createUrl('manager/default/index'); ?>">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <?php foreach ($rows as $item): ?>
    <li>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-list"></i>
            <span><?php echo $item['name']; ?></span>
            <b class="arrow icon-angle-right"></b>
        </a>
        <ul class="submenu">
            <li>
                <a href="<?php echo Yii::app()->urlManager->createUrl('manager/nav/index', array('pid' => $item['id'])); ?>">栏目管理</a>
            </li>
            <?php if (isset($item['_child'])): foreach ($item['_child'] as $subItem): ?>
            <li>
                <a href="ui_general.html"><?php echo $subItem['name']; ?></a>
            </li>
            <?php endforeach; endif; ?>
        </ul>
    </li>
    <?php endforeach; ?>

    <li>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-th"></i>
            <span>系统设置</span>
            <b class="arrow icon-angle-right"></b>
        </a>
        <ul class="submenu">
            <li><a href="<?php echo Yii::app()->urlManager->createUrl('manager/admin/index'); ?>">管理员</a></li>
            <li><a href="<?php echo Yii::app()->urlManager->createUrl('manager/link/index'); ?>">友情链接</a></li>
        </ul>
    </li>

    <li>
        <a href="<?php echo Yii::app()->urlManager->createUrl('manager/category/index'); ?>">
            <i class="icon-file"></i>
            <span>栏目初始化</span>
        </a>
    </li>
</ul>