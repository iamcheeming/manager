<?php
$yii = dirname(__FILE__) . '/../yii/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/test.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

include $yii;
Yii::beginProfile('blockID');
Yii::createWebApplication($config)->run();
Yii::endProfile('blockID');
