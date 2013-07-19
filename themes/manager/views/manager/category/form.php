<div class="box">
    <div class="title">
        <h5>增加/修改分类</h5>
    </div>
    <?php if (Yii::app()->user->hasFlash('error')): ?>
    <div class="messages">
        <div id="message-error" class="message message-error">
            <div class="image">
                <img src="<?php echo $this->assetsUrl; ?>/resources/images/icons/error.png" alt="Error" height="32" />
            </div>
            <div class="text">
                <h6>Error Message</h6>
                <span><?php echo Yii::app()->user->getFlash('error'); ?></span>
            </div>
            <div class="dismiss">
                <a href="#message-error"></a>
            </div>
        </div>
    </div>
    <?php endif; ?>
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
                        <label for="input-small">max level:</label>
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
                <div class="buttons">
                    <input type="submit" name="submit" value="Submit" />
                    <input type="reset" name="reset" value="Reset" />
                </div>
            </div>
        </div>
    </form>
</div>