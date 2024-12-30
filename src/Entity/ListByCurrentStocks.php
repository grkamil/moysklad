<?php

namespace MoySklad\Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Класс для получения отчёта остатков по складами
 */
class ListByCurrentStocks
{
    /**
     * @Type("array<MoySklad\Entity\Product\ByStoreProductCurrentStock>")
     */
    public $rows;
}
