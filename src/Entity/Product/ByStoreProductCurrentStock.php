<?php

namespace MoySklad\Entity\Product;

use JMS\Serializer\Annotation\Type;
use MoySklad\Entity\MetaEntity;

class ByStoreProductCurrentStock
{
    /**
     * @Type("string")
     */
    public $assortmentId;

    /**
     * @Type("string")
     */
    public $storeId;

    /**
     * @Type("float")
     */
    public $stock;

    /**
     * @Type("float")
     */
    public $reserve;
}