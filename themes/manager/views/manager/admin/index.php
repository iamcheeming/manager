<div class="page-title">
    <div>
        <h1><i class="icon-file-alt"></i>系统设置</h1>
    </div>
</div>
<div id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>Home
            <span class="divider"><i class="icon-angle-right"></i></span>
        </li>
        <li class="active">管理员列表</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-table"></i>管理员列表</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <div class="btn-toolbar pull-left">
                    <a href="<?php echo $this->createUrl('add'); ?>" class="btn btn-primary">添加管理员</a>
                </div>
                <table class="table table-hover fill-head">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>昵称</th>
                        <th>用户组</th>
                        <th>添加时间</th>
                        <th style="width: 120px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['nick_name']; ?></td>
                            <td><?php echo $row['group_id']; ?></td>
                            <td><?php echo $row['created_time']; ?></td>
                            <td>
                                <a class="btn btn-primary btn-small show-tooltip" href="<?php echo $this->createUrl('edit', array('id' => $row['id'])); ?>" data-original-title="编辑"><i class="icon-edit"></i></a>
                                <?php if ($row['id'] > 1): ?>
                                <a class="btn btn-danger btn-small show-tooltip" href="<?php echo $this->createUrl('resume', array('id' => $row['id'])); ?>" data-original-title="重置密码"><i class="icon-adjust"></i></a>
                                <a class="btn btn-danger btn-small show-tooltip" href="<?php echo $this->createUrl('del', array('id' => $row['id'])); ?>" data-original-title="删除"><i class="icon-trash"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>