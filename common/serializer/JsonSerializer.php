<?php

namespace common\serializer;

class JsonSerializer implements SerializerInterface
{
    public function encode($array)
    {
        return json_encode($array);
    }

    public function decode($array)
    {
        return json_decode($array);
    }
}