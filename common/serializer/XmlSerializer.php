<?php

namespace common\serializer;

class XmlSerializer implements SerializerInterface
{
    public function encode($array)
    {
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($array, array($xml, 'addChild'));
        return $xml->asXML();
    }

    public function save($data)
    {
        // TODO: Implement save() method.
    }
}