<?php

require_once (dirname(__FILE__). '/../framework/yii.php');
// $configuration = dirname
$config = dirname (__FILE__). '/protected/config/main.php';
// (__FILE__).'/protected/config/main.php';

Yii::createWebApplication($config)->run();

?>
