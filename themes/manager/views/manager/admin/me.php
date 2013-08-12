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
        <li class="active">修改密码</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-reorder"></i>修改密码</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <form action="#" class="form-horizontal" method="post">
                    <div class="control-group">
                        <label class="control-label">旧密码</label>
                        <div class="controls">
                            <input type="password" name="old_password" class="input-medium" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">新密码</label>
                        <div class="controls">
                            <input type="password" name="password" class="input-medium" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">确认密码</label>
                        <div class="controls">
                            <input type="password" name="confirm_password" class="input-medium" />
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