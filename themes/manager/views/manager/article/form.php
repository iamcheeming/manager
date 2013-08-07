<div class="box">
    <div class="title">
        <h5><?php echo $record['id'] ? '编辑' : '添加'; ?>信息</h5>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <form method="post" action="<?php echo $this->createUrl('form'); ?>">
        <div class="form">
            <div class="fields">
                <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
                <input type="hidden" name="category_id" value="<?php echo $record['category_id']; ?>" />
                <div class="field  field-first">
                    <div class="label">
                        <label for="input-sortnum">序号:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="input-sortnum" size="20" name="sortnum" value="<?php echo $record['sortnum']; ?>" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-title">标题:</label>
                    </div>
                    <div class="input">
                        <input type="text" class="medium" id="input-title" maxlength="24" name="title" value="<?php echo $record['title']; ?>" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-link">外部链接:</label>
                    </div>
                    <div class="input">
                        <input type="text" class="medium" name="link" id="input-link" maxlength="64" value="<?php echo $record['link']; ?>" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="file">封面图片:</label>
                    </div>
                    <div class="input">
                        <input class="text" id="pic" name="pic" style="width: 250px;" />
                        <div class="button highlight">
                            <input type="button" id="pickpic" value="选择图片" class="ui-button ui-widget ui-state-default ui-corner-all" value="<?php echo $record['pic']; ?>" />
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="label label-radio">
                        <label>状态:</label>
                    </div>
                    <div class="radios">
                        <?php foreach (Yii::app()->params['article_status'] as $key => $val): ?>
                        <div class="radio">
                            <input type="radio" name="status" id="radio-<?php echo $key; ?>" value="<?php echo $key; ?>"<?php if ($record['status'] == $key) echo ' checked'; ?> />
                            <label for="radio-<?php echo $key; ?>"><?php echo $val; ?></label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="field">
                    <div class="label label-textarea">
                        <label for="textarea">内容:</label>
                    </div>
                    <div class="textarea textarea-editor">
                        <textarea class="editor" rows="12" cols="50" name="content" id="textarea"><?php echo $record['content']; ?></textarea>
                    </div>
                </div>
                <div class="buttons">
                    <input type="submit" value="Submit" name="submit" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false" />
                    <input type="reset" value="Reset" name="reset" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false" />
                </div>
            </div>
        </div>
    </form>
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
</script>