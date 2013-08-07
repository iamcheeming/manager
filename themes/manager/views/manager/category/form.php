<div class="box">
    <div class="title">
        <h5>增加/修改分类</h5>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <form id="form" action="<?php echo $this->createUrl('form'); ?>" method="post">
        <div class="form">
            <div class="fields">
                <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />
                <div class="field field-first">
                    <div class="label">
                        <label for="input-small">序号:</label>
                    </div>
                    <div class="input">
                        <input type="text" name="sortnum" value="<?php echo $record['sortnum']; ?>" class="small" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-small">层级:</label>
                    </div>
                    <div class="input">
                        <input type="text" name="max_level" value="<?php echo $record['max_level']; ?>" class="small" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-small">分类名称:</label>
                    </div>
                    <div class="input">
                        <input type="text" name="name" value="<?php echo $record['name']; ?>" class="small" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-small">可增删:</label>
                    </div>
                    <div class="input">
                        <label><input type="radio" name="has_alter" value="1"<?php if ($record['has_alter']) echo ' checked'; ?> /> Allow</label>
                        <label><input type="radio" name="has_alter" value="0"<?php if (!$record['has_alter']) echo ' checked'; ?> /> Deny</label>
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