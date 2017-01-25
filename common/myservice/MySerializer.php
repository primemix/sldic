<?php

namespace common\myservice;

use yii\base\Component;
use yii\helpers\Json;

class MySerializer extends Component
{
    public $data;
    public $pathUploadFile;

    public function init()
    {
        parent::init();
    }

    /**
     * @param $data
     * @return string
     */
    public function Json($data)
    {
        return $data = Json::encode($data);
    }

    /**
     * @param $data
     */
    public function save($data)
    {
        $path = \Yii::$app->basePath.'/'.$this->pathUploadFile;
        $file = fopen($path, 'w');
        fwrite($file, $data);
        fclose($file);
    }
}