<?php

date_default_timezone_set("Asia/Taipei");

echo "I am debug_3";


#<<<<<<< HEAD
echo "I am develop_1 in developing and other gay is debuging in the sametime";exit;

#=======
echo "I am debug 2 who want to merge to master";
#>>>>>>> master

#echo "this is branch develop_1 2nd time";exit;

echo "I am merge from master after debug";exit;

#echo "this is branch develop_1 2nd time";exit;
// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii/yii-1.1.10.r3566/framework/yii.php';
//$config=dirname(__FILE__).'/protected/config/main.php';
$config=dirname(__FILE__).'/protected/config/main2.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
