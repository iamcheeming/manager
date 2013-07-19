<div class="box">
    <div class="title">
        <h5>category</h5>
    </div>
    <div class="table">
        <form action="" method="post">
            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>序号</th>
                    <th>分类名称</th>
                    <th>max level</th>
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