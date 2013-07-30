<div class="box">
    <div class="title">
        <h5>管理员</h5>
        <ul class="links">
            <li><a href="<?php echo Yii::app()->urlManager->createUrl('manager/admin/add'); ?>">添加管理员</a></li>
        </ul>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <div class="table">
        <form action="" method="post">
            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>用户名</th>
                    <th>昵称</th>
                    <th>用户组</th>
                    <th>时间</th>
                    <th class="last">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td class="w10 center"><?php echo $row['id']; ?></td>
                        <td class="center"><?php echo $row['username']; ?></td>
                        <td class="center"><?php echo $row['nick_name']; ?></td>
                        <td class="w10 center"><?php echo $row['group_id']; ?></td>
                        <td class="w20 center"><?php echo $row['created_time']; ?></td>
                        <td class="w20 center last">
                            <a href="<?php echo $this->createUrl('edit', array('id' => $row['id'])); ?>">修改</a>
                            <?php if ($row['id'] > 1): ?>
                            <a href="<?php echo $this->createUrl('resume', array('id' => $row['id'])); ?>">重置密码</a>
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