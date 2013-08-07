<div class="box">
    <div class="title">
        <h5>栏目分类</h5>
        <ul class="links">
            <li><a href="<?php echo $this->createUrl('add'); ?>">添加栏目</a></li>
        </ul>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <div class="table">
        <form action="" method="post">
            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>序号</th>
                    <th>分类名称</th>
                    <th>层级</th>
                    <th>可增删</th>
                    <th class="last">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row): ?>
                <tr>
                    <td class="w10 center"><?php echo $row->id; ?></td>
                    <td class="w10 center"><?php echo $row->sortnum; ?></td>
                    <td class="center"><?php echo $row->name; ?></td>
                    <td class="w10 center"><?php echo $row->max_level; ?></td>
                    <td class="w10 center"><?php echo $row->has_alter ? 'Allow' : 'Deny'; ?></td>
                    <td class="w20 center last">
                        <a href="<?php echo $this->createUrl('edit', array('id' => $row->id)); ?>">修改</a>
                        <a href="<?php echo $this->createUrl('del', array('id' => $row->id)); ?>">删除</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>