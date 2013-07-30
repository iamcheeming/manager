<?php if ($flashes = Yii::app()->user->getFlashes()): ?>
<div class="messages">
    <?php foreach ($flashes as $key => $val): ?>
        <div id="message-<?php echo $key; ?>" class="message message-<?php echo $key; ?>">
            <div class="image">
                <img src="<?php echo $this->assetsUrl; ?>/resources/images/icons/<?php echo $key; ?>.png" height="32" />
            </div>
            <div class="text">
                <h6><?php echo ucfirst($key); ?> Message</h6>
                <span><?php echo $val; ?></span>
            </div>
            <div class="dismiss">
                <a href="#message-<?php echo $key; ?>"></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>