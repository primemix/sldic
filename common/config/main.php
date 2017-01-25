<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'serializer' => [
            'class' => 'common\myservice\MySerializer',
            'pathUploadFile' => 'data',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
