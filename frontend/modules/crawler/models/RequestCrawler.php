<?php

namespace frontend\modules\crawler\models;

use Yii;
use yii\base\Model;

class RequestCrawler extends Model
{
    /**
     * @return string
     * save JSON
     */
    public function crateSerializer()
    {
        $data = [
            'foo' => 'bar',
            'a' => 'b',
            'param' => [
                'param2' => ['a' => 'b'],
                'foo' => 'bar'
            ],
        ];

        $data = Yii::$app->serializer->Json($data);
        Yii::$app->serializer->save($data);
        return $data;//  return string {"foo":"bar","a":"b","param":{"param2":{"a":"b"},"foo":"bar"}}

    }
}