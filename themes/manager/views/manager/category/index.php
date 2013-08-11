<div class="page-title">
    <div>
        <h1><i class="icon-file-alt"></i>栏目初始化</h1>
    </div>
</div>
<div id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>Home
            <span class="divider"><i class="icon-angle-right"></i></span>
        </li>
        <li class="active">栏目列表</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-table"></i>栏目列表</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <div class="btn-toolbar pull-left">
                    <a href="<?php echo $this->createUrl('add'); ?>" class="btn btn-primary">添加分类</a>
                </div>
                <table class="table table-hover fill-head">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>序号</th>
                        <th>名称</th>
                        <th>层级</th>
                        <th>增删</th>
                        <th style="width: 70px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->sortnum; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->max_level; ?></td>
                        <td><?php echo $row->has_alter ? 'Allow' : 'Deny'; ?></td>
                        <td>
                            <a class="btn btn-primary btn-small show-tooltip" href="<?php echo $this->createUrl('edit', array('id' => $row->id)); ?>" data-original-title="Edit"><i class="icon-edit"></i></a>
                            <a class="btn btn-danger btn-small show-tooltip" href="<?php echo $this->createUrl('del', array('id' => $row->id)); ?>" data-original-title="Delete"><i class="icon-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>