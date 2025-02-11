<?php

namespace MoySklad\Util\Serializer;

use JMS\Serializer\Serializer;
use MoySklad\Entity\Attribute;
use MoySklad\Entity\Meta;

class AttributeValueDeserializeHandler
{
    /**
     * @param $visitor
     * @param $value
     * @param array $type
     * @return mixed
     */
    public function __invoke($visitor, $value, array $type)
    {
        return $value;
    }
}
