<?php
$func = function ($rows, $pid, $cid) use (&$func)
{
    foreach ($rows as $row):
        if ($cid && $cid['id'] == $row['id']):
            echo '<li class="active">';
        else:
            echo '<li>';
        endif;
        if ($row['has_sub']):
            echo '<a href="#" class="dropdown-toggle"><span>', $row['name'], '</span><b class="arrow icon-angle-right" style="margin-left: 5px;"></b>
</a><ul class="submenu" style="margin-left: 25px;">';
            if ($row['has_alter']):
                if ($pid && $pid['id'] == $row['id']):
                    echo '<li class="active">';
                else:
                    echo '<li>';
                endif;
                echo '<a href="', Yii::app()->createUrl('manager/nav/index', array('pid' => $row['id'])), '">栏目管理</a></li>';
            endif;
            if (isset($row['_child']) && is_array($row['_child'])) $func($row['_child'], $pid, $cid);
            echo '</ul>';
        else:
            echo '<a href="', Yii::app()->urlManager->createUrl('manager/article/index', array('cid' => $row['id'])), '">', $row['name'], '</a>';
        endif;
        echo '</li>';
    endforeach;
}
?>

<ul class="nav nav-list">
    <li>
        <span class="search-pan">
            <button type="submit">
                <i class="icon-search"></i>
            </button>
            <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
        </span>
    </li>
    <li<?php if ($controller == 'default' && $action == 'index') echo ' class="active"'; ?>>
        <a href="<?php echo Yii::app()->urlManager->createUrl('manager/default/index'); ?>">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <?php
    foreach ($rows as $row):
        $active = '';
        if ($pid || $cid):
            $temp = $pid ? $pid : $cid;
            if ($temp['id'] == $row['id']):
                $active = ' class="active"';
            else:
                if ($temp['route']):
                    if (strpos($temp['route'], "{$row['id']},") === 0):
                        $active = ' class="active"';
                    endif;
                endif;
            endif;
        endif;
    ?>
    <li<?php echo $active; ?>>
        <a href="#" class="dropdown-toggle">
            <i class="icon-list"></i>
            <span><?php echo $row['name']; ?></span>
            <b class="arrow icon-angle-right"></b>
        </a>
        <ul class="submenu">
            <?php if ($row['has_alter']): ?>
            <li<?php if ($pid && $pid['id'] == $row['id']) echo ' class="active"'; ?>>
                <a href="<?php echo Yii::app()->urlManager->createUrl('manager/nav/index', array('pid' => $row['id'])); ?>">栏目管理</a>
            </li>
            <?php endif; if (isset($row['_child'])) $func($row['_child'], $pid, $cid); ?>
        </ul>
    </li>
    <?php endforeach; ?>

    <li<?php if (in_array($controller, array('admin', 'link'))) echo ' class="active"'; ?>>
        <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-th"></i>
            <span>系统设置</span>
            <b class="arrow icon-angle-right"></b>
        </a>
        <ul class="submenu">
            <li<?php if ($controller == 'admin') echo ' class="active"'; ?>><a href="<?php echo Yii::app()->urlManager->createUrl('manager/admin/index'); ?>">管理员</a></li>
            <li<?php if ($controller == 'link') echo ' class="active"'; ?>><a href="<?php echo Yii::app()->urlManager->createUrl('manager/link/index'); ?>">友情链接</a></li>
        </ul>
    </li>
    <?php if (Yii::app()->user->id == -1): ?>
    <li<?php if ($controller == 'category') echo ' class="active"'; ?>>
        <a href="<?php echo Yii::app()->urlManager->createUrl('manager/category/index'); ?>">
            <i class="icon-file"></i>
            <span>栏目初始化</span>
        </a>
    </li>
    <?php endif; ?>
</ul>