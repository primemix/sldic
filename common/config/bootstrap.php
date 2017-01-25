<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

/**
 * DIC
 */
Yii::$container->set(\common\serializer\SerializerInteface::class, \common\serializer\JsonSerializer::class);
Yii::$container->set('requestCrawler', [
    'class' => \common\serializer\RequestCrawler::class,
    'serializer' => new \common\serializer\JsonSerializer(),
    'pathUploadFile' => '/frontend/data/'
]);