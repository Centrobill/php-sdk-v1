<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Exception\FeeException;
use Centrobill\Sdk\ValueObject\Fees\Type;

class Fee
{
    /** @var Type */
    private Type $type;

    /** @var GeoFee[] */
    private array $items = [];

    public function __construct(Type $type, array $items = [])
    {
        $this->type = $type;
        $this->items = $items;
    }

    public function addItem(GeoFee $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function toArray(): array
    {
        if (empty($this->items)) {
            throw FeeException::emptyItems();
        }

        return [
            'type'  => (string)$this->type,
            'items' => array_map(fn(GeoFee $item) => $item->toArray(), $this->items),
        ];
    }
}
