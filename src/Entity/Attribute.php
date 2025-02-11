<?php

namespace MoySklad\Entity;

use JMS\Serializer\Annotation\Type;

class Attribute extends MetaEntity //@todo create deserializer
{
    /**
     * @Type("MoySklad\Entity\AttributeValue")
     */
    public $value;

    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $type;

    /**
     * @Type("bool")
     */
    public $required;
}
