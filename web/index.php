<?php

require __DIR__ . '/../vendor/autoload.php'; // Composer自动加载
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php'; // Yii自动加载及部分初始化代码

/**
 * id和basePath是实例化Application类的必须参数
 * @see http://www.yiiframework.com/doc-2.0/guide-structure-applications.html#required-properties
 */
$config = [
    'id' => 'playii',
    'basePath' => dirname(__DIR__),
    // 告诉框架，控制器在哪里
    'controllerNamespace' => 'Playii\Controller',
    /**
     * URL静态化
     */
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];

(new yii\web\Application($config))->run();
