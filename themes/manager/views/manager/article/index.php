<div class="box">
    <div class="title">
        <h5>"<?php echo $category['name']; ?>" 信息列表</h5>
        <ul class="links">
            <li><a href="<?php echo $this->createUrl('add', array('cid' => $category['id'])); ?>">添加信息</a></li>
        </ul>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <div class="table">
        <form action="<?php echo $this->createUrl('batch'); ?>" method="post" id="form1">
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>序号</th>
                    <th>标题</th>
                    <th>图片</th>
                    <th>外链</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th class="last">管理</th>
                </tr>
                </thead>
                <tbody>
                <?php $articleStatus = Yii::app()->params['article_status']; foreach ($rows as $row): ?>
                <tr>
                    <td class="selected"><input type="checkbox" name="ids[]" value="<?php echo $row['id']; ?>" /></td>
                    <td class="category"><?php echo $row['sortnum']; ?></td>
                    <td class="center"><?php echo $row['title']; ?></td>
                    <td class="w8 center"><?php echo empty($row['pic']) ? '' : '图'; ?></td>
                    <td class="w8 center"><?php echo empty($row['link']) ? '' : '链'; ?></td>
                    <td class="w8 center"><?php echo $articleStatus[$row['status']]; ?></td>
                    <td class="w12 center"><?php echo $row['created_time']; ?></td>
                    <td class="w12 center last">
                        <a href="<?php echo $this->createUrl('edit', array('id' => $row['id'])); ?>">编辑</a>
                        <a href="<?php echo $this->createUrl('del', array('id' => $row['id'])); ?>">删除</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <?php if ($rows): ?>
                <thead>
                <tr>
                    <th colspan="8" class="last" style="text-align: left; padding: 10px 10px 10px 2px;">
                        <input type="checkbox" class="checkall" /> 全选
                        <span style="float: right; display: block;">
                            <input type="button" id="batch-button" value="删除" />
                        </span>
                    </th>
                </tr>
                </thead>
                <?php endif; ?>
            </table>

            <?php echo $pagination; ?>

        </form>
    </div>
</div>
<script>
$(function(){
    $("#batch-button").click(function() {
        var l = $("#form1 input[name='ids[]']:checked").length;
        if (l > 0) {
            $("#form1").submit();
        } else {
            alert("请选择要操作的项");
        }
    });
});
</script>