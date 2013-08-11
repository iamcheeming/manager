<?php
if ($flashes = Yii::app()->user->getFlashes()):
    foreach ($flashes as $key => $val):
        $tipClass = '';
        switch ($key):
            case 'warning':
                $tipClass = '';
                break;
            case 'success':
            case 'info':
            case 'error':
                $tipClass = " alert-{$key}";
                break;
        endswitch;
?>
<div class="alert<?php echo $tipClass; ?>">
    <button class="close" data-dismiss="alert">×</button>
    <h4><?php echo ucfirst($key); ?>!</h4>
    <p><?php echo $val; ?></p>
</div>
<?php
    endforeach;
endif;
?>