<?php
$controllerId = $this->controller->id;
$actionId = Yii::app()->controller->action->id;
$urlManager = Yii::app()->urlManager;

$func = function ($rows) use (&$func) {
    $count = count($rows);
    $i = 0;
    $last = false;
    foreach ($rows as $item):
        ++$i;
        if ($i == $count) $last = true;
        if (isset($item['_child']) && is_array($item['_child'])):
            if ($last):
                echo '<li class="collapsible last">';
            else:
                echo '<li class="collapsible">';
            endif;
            echo '<a href="javascript:;" class="collapsible minus">', $item['name'], '</a>',
                '<ul id="whatever" class="expanded">',
                '<li>',
                '<a href="', Yii::app()->urlManager->createUrl('manager/nav/index', array('pid' => $item['id'])), '">栏目管理</a>',
                '<a href="', Yii::app()->urlManager->createUrl('manager/nav/add', array('pid' => $item['id'])), '">添加</a></li>';
            $func($item['_child']);
            echo '</ul></li>';
        else:
            if ($last):
                echo '<li class="last">';
            else:
                echo '<li>';
            endif;
            echo '<a href="', Yii::app()->createUrl('manager/article/index', array('cid' => $item['id'])), '">', $item['name'], '</a></li>';
        endif;
    endforeach;
};

foreach ($rows as $row):
    $isSelected = true;
?>
<h6 id="h-menu-bar-<?php echo $row['id']; ?>" class="selected">
    <a href="#bar-<?php echo $row['id']; ?>"><span><?php echo $row['name']; ?></span></a>
</h6>
<ul id="menu-bar-<?php echo $row['id']; ?>" class="opened">
    <li>
        <a href="<?php echo $urlManager->createUrl('manager/nav/index', array('pid' => $row['id'])); ?>">栏目管理</a>
        <a href="<?php echo $urlManager->createUrl('manager/nav/add', array('pid' => $row['id'])); ?>" style="background: none;">添加</a>
    </li>
    <?php if (isset($row['_child'])) $func($row['_child']); ?>
</ul>
<?php endforeach; ?>
<h6 id="h-menu-bar-100" class="selected">
    <a href="#bar-100"><span>系统初始化</span></a>
</h6>
<ul id="menu-bar-100" class="opened">
    <li>
        <a href="<?php echo $urlManager->createUrl('manager/category/add'); ?>">添加分类</a>
    </li>
    <li class="last">
        <a href="<?php echo $urlManager->createUrl('manager/category/index'); ?>">栏目分类</a>
    </li>
</ul>