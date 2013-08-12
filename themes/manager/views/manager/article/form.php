<div class="page-title">
    <div>
        <h1><i class="icon-file-alt"></i>信息管理</h1>
    </div>
</div>
<div id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>Home
            <span class="divider"><i class="icon-angle-right"></i></span>
        </li>
        <li class="active"><?php echo $record['id'] ? '编辑' : '添加'; ?>信息</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-reorder"></i><?php echo $record['id'] ? '编辑' : '添加'; ?>信息</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <form action="<?php echo $this->createUrl('form'); ?>" class="form-horizontal" method="post">
                    <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
                    <input type="hidden" name="category_id" value="<?php echo $record['category_id']; ?>" />
                    <div class="control-group">
                        <label class="control-label">序号</label>
                        <div class="controls">
                            <input type="text" name="sortnum" value="<?php echo $record['sortnum']; ?>" class="input-small" maxlength="7" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">标题</label>
                        <div class="controls">
                            <input type="text" name="title" value="<?php echo $record['title']; ?>" class="input-xlarge" maxlength="24" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">外部链接</label>
                        <div class="controls">
                            <input type="text" name="link" value="<?php echo $record['link']; ?>" class="input-xlarge" maxlength="64" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">封面图片</label>
                        <div class="controls">
                            <input type="text" id="pic" name="pic" value="<?php echo $record['pic']; ?>" class="input-xlarge" maxlength="48" />
                            <a href="javascript:;" id="pickpic" class="btn btn-primary">选择图片</a>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">状态</label>
                        <div class="controls">
                            <?php foreach ($articleStatus as $key => $val): ?>
                            <label class="radio">
                                <input type="radio" name="status" value="<?php echo $key; ?>"<?php if ($record['status'] == $key) echo ' checked=""'; ?> /> <?php echo $val; ?>
                            </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">内容</label>
                        <div class="controls">
                            <textarea class="editor input-xxlarge" rows="12" cols="50" name="content"><?php echo $record['content']; ?></textarea>
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
<script>
$("#pickpic").click(function(){
    moxman.browse({
        path: '/uploads/images',
        fields: 'pic',
        no_host: true,
        extensions: 'jpg,gif,png,bmp'
    });
});
tinymce.init({
    language : 'zh_CN',
    selector:'textarea.editor',
    relative_urls: false,
    remove_script_host: true,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste moxiemanager"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>