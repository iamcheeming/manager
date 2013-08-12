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
        <li class="active"><?php echo $record['id'] ? '编辑' : '添加'; ?>管理员</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-reorder"></i><?php echo $record['id'] ? '编辑' : '添加'; ?>管理员</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <form action="<?php echo $this->createUrl('form'); ?>" class="form-horizontal" method="post">
                    <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
                    <div class="control-group">
                        <label class="control-label">用户名</label>
                        <div class="controls">
                            <?php
                            if ($record['id']):
                                echo $record['username'];
                            else:
                            ?>
                            <input type="text" name="username" class="input-medium" maxlength="16" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">昵称</label>
                        <div class="controls">
                            <input type="text" name="nick_name" value="<?php echo $record['nick_name']; ?>" class="input-medium" maxlength="16" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">权限组</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="group_id" value="1"<?php if ($record['group_id'] == 1) echo ' checked=""'; ?> /> 管理员
                            </label>
                            <label class="radio">
                                <input type="radio" name="group_id" value="2"<?php if ($record['group_id'] == 2) echo ' checked=""'; ?> /> 一般管理员
                            </label>
                            <label class="radio">
                                <input type="radio" name="group_id" value="3"<?php if ($record['group_id'] == 3) echo ' checked=""'; ?> /> 编辑
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