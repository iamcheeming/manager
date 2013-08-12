<div class="page-title">
    <div>
        <h1><i class="icon-file-alt"></i>"<?php echo $category['name']; ?>" 信息列表</h1>
    </div>
</div>
<div id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>Home
            <span class="divider"><i class="icon-angle-right"></i></span>
        </li>
        <li class="active">信息列表</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-table"></i>信息列表</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <div class="btn-toolbar">
                    <a href="<?php echo $this->createUrl('add', array('cid' => $category['id'])); ?>" class="btn btn-primary">添加信息</a>
                    <a href="javascript:;" id="batch-button" class="btn btn-primary">批量删除</a>
                </div>
                <form id="form1" action="<?php echo $this->createUrl('batch'); ?>" method="post">
                <table class="table table-advance">
                    <thead>
                    <tr>
                        <th style="width:18px"><input type="checkbox"></th>
                        <th>序号</th>
                        <th>标题</th>
                        <th>图片</th>
                        <th>外链</th>
                        <th>状态</th>
                        <th>添加时间</th>
                        <th style="width: 90px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="<?php echo $row['id']; ?>" /></td>
                            <td><?php echo $row['sortnum']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo empty($row['pic']) ? '' : '图'; ?></td>
                            <td><?php echo empty($row['link']) ? '' : '链'; ?></td>
                            <td><?php echo $articleStatus[$row['status']]; ?></td>
                            <td><?php echo $row['created_time']; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-small show-tooltip" href="<?php echo $this->createUrl('edit', array('id' => $row['id'])); ?>" data-original-title="Edit"><i class="icon-edit"></i></a>
                                    <a class="btn btn-small btn-danger show-tooltip" href="<?php echo $this->createUrl('del', array('id' => $row['id'])); ?>" data-original-title="Delete"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                </form>
                <div class="pagination text-center"><?php echo $pagination; ?></div>

            </div>
        </div>
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