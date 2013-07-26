<div class="box">
    <div class="title">
        <h5>"<?php echo $parent_record['name']; ?>"子栏目</h5>
        <?php if ($parent_record['has_alter']): ?>
        <ul class="links">
            <li><a href="<?php echo Yii::app()->urlManager->createUrl('manager/nav/add', array('pid' => $parent_record['id'])); ?>">添加子栏目</a></li>
        </ul>
        <?php endif; ?>
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
    <div class="table">
        <form action="" method="post">
            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>序号</th>
                    <th>栏目名称</th>
                    <th>层级</th>
                    <th>子栏目</th>
                    <th class="last">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td class="w10 center"><?php echo $row['id']; ?></td>
                        <td class="w10 center"><?php echo $row['sortnum']; ?></td>
                        <td class="center"><?php echo $row['name']; ?></td>
                        <td class="w10 center"><?php echo $row['max_level']; ?></td>
                        <td class="w10 center"><?php echo $row['has_sub'] ? 'allow' : 'deny'; ?></td>
                        <td class="w20 center last">
                            <a href="<?php echo $this->createUrl('edit', array('id' => $row['id'])); ?>">修改</a>
                            <?php if ($row['has_alter']): ?>
                            <a href="<?php echo $this->createUrl('del', array('id' => $row['id'])); ?>">删除</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>