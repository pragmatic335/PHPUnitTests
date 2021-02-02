 <?php

 use yii\helpers\ArrayHelper;

 define('YII_ENV', 'test');
defined('YII_DEBUG') or define('YII_DEBUG', true);

require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
require __DIR__ .'/../vendor/autoload.php';

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

 $config = ArrayHelper::merge(
     require __DIR__ . '/../config/web.php',
     require __DIR__ . '/config/config.php'
 );

 $application = new yii\web\Application($config);