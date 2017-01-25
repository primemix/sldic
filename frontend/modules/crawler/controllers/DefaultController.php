<?php

namespace frontend\modules\crawler\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\crawler\models\RequestCrawler;

class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $data = new RequestCrawler();
        $data = $data->crateSerializer();
        return $this->render('index', [
            'data' => $data,
        ]);
    }

    public function actionDic()
    {
        $data = [
            'foo' => 'bar',
            'a' => 'b',
            'param' => [
                'param2' => ['a' => 'b'],
                'foo' => 'bar'
            ],
        ];
        $encode = Yii::$container->get('requestCrawler')->serializer->encode($data);
        $decode = Yii::$container->get('requestCrawler')->serializer->decode($encode);
        $path = Yii::$container->get('requestCrawler')->pathUploadFile;
        return $this->render('dic', [
            'encode' => $encode,
            'decode' => $decode
        ]);
    }
}