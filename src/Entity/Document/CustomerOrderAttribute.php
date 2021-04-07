<?php

namespace MoySklad\Entity\Document;

use JMS\Serializer\Annotation\Type;
use MoySklad\Entity\MetaEntity;
use MoySklad\Util\Object\Annotation\Generator;

class CustomerOrderAttribute extends MetaEntity
{
    /**
     * @Type("string")
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
