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
        <li class="active"><?php echo $record['id'] ? '编辑' : '添加'; ?>栏目</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-reorder"></i><?php echo $record['id'] ? '编辑' : '添加'; ?>栏目</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <form action="<?php echo $this->createUrl('form'); ?>" class="form-horizontal" method="post">
                <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
                <div class="control-group">
                    <label class="control-label">序号</label>
                    <div class="controls">
                        <input type="text" name="sortnum" value="<?php echo $record['sortnum']; ?>" class="input-mini" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">名称</label>
                    <div class="controls">
                        <input type="text" name="name" value="<?php echo $record['name']; ?>" class="input-large" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">最大层级</label>
                    <div class="controls">
                        <input type="text" name="max_level" value="<?php echo $record['max_level']; ?>" class="input-mini" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">增删</label>
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" name="has_alter" value="1"<?php if ($record['has_alter']) echo ' checked=""'; ?> /> Allow
                        </label>
                        <label class="radio">
                            <input type="radio" name="has_alter" value="0"<?php if (!$record['has_alter']) echo ' checked=""'; ?> /> Deny
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Save</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>