<div class="box">
    <div class="title">
        <h5><?php echo $record['id'] ? '修改' : '添加'; ?>管理员</h5>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <form id="form" action="<?php echo $this->createUrl('form'); ?>" method="post">
        <div class="form">
            <div class="fields">
                <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
                <div class="field field-first">
                    <div class="label">
                        <label for="input-small">用户名:</label>
                    </div>
                    <div class="input">
                        <?php
                        if ($record['id']):
                            echo $record['username'];
                        else:
                        ?>
                        <input type="text" name="username" value="" class="small" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-small">昵称:</label>
                    </div>
                    <div class="input">
                        <input type="text" name="nick_name" value="<?php echo $record['nick_name']; ?>" class="small" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-small">组:</label>
                    </div>
                    <div class="input">
                        <label><input type="radio" name="group_id" value="1"<?php if ($record['group_id'] == 1) echo ' checked'; ?> /> 超级管理员</label>
                        <label><input type="radio" name="group_id" value="2"<?php if ($record['group_id'] == 2) echo ' checked'; ?> /> 高级管理员</label>
                        <label><input type="radio" name="group_id" value="3"<?php if ($record['group_id'] == 3) echo ' checked'; ?> /> 一般管理员</label>
                    </div>
                </div>
                <div class="buttons">
                    <input type="submit" name="submit" value="Submit" />
                    <input type="reset" name="reset" value="Reset" />
                </div>
            </div>
        </div>
    </form>
</div>