<?php
$yiit = dirname(__FILE__) . '/../../../yii/framework/yiit.php';
$config = dirname(__FILE__) . '/../config/test.php';

include $yiit;
include dirname(__FILE__) . '/WebTestCase.php';

Yii::createWebApplication($config);