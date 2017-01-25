<?php

namespace common\serializer;

use yii\base\Component;

class RequestCrawler extends Component
{
    public $serialiser;
    public $pathUpload;

    /**
     * RequestCrawler constructor.
     * @param SerializerInterface $serializer
     * @param $config
     */
    public function __construct(SerializerInterface $serializer, $config = [])
    {
        $this->serialiser = $serializer;
        parent::__construct($config);
    }
}