<div class="box">
    <div class="title">
        <h5>修改密码</h5>
    </div>

    <?php $this->renderPartial('../_flashes'); ?>

    <form id="form" action="" method="post">
        <div class="form">
            <div class="fields">
                <div class="field field-first">
                    <div class="label">
                        <label for="input-small">旧密码:</label>
                    </div>
                    <div class="input">
                        <input type="password" name="old_password" class="small" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-small">新密码:</label>
                    </div>
                    <div class="input">
                        <input type="password" name="password" class="small" />
                    </div>
                </div>
                <div class="field">
                    <div class="label">
                        <label for="input-small">确定密码:</label>
                    </div>
                    <div class="input">
                        <input type="password" name="confirm_password" class="small" />
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