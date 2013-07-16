<?php
$yii = dirname(__FILE__) . '/../yii/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';

include $yii;
Yii::createWebApplication($config)->run();