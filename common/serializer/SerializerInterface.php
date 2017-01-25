<?php

namespace common\serializer;

/**
 * Interface SerializerInterface
 * encode method - encode an array in formats JSON or XML
 * @package common\serializer\interfaces
 */
interface SerializerInterface
{
    /**
     * @param $array
     * @return mixed
     */
    public function encode($array);

    /**
     * @param $data
     * @return mixed
     */
    public function decode($array);
}