<div class="box">
    <div class="title">
        <h5>"<?php echo $parent_record['name']; ?>"子栏目</h5>
        <?php if ($parent_record['has_alter']): ?>
        <ul class="links">
            <li><a href="<?php echo $this->createUrl('add', array('pid' => $parent_record['id'])); ?>">添加子栏目</a></li>
        </ul>
        <?php endif; ?>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <div class="table">
        <form method="post">
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