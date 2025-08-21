<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Exception\GeoFeeException;
use Centrobill\Sdk\ValueObject\Country;

class GeoFee
{
    private const DEFAULT_GEO = 'ALL';

    /** @var ?Country */
    private ?Country $geo;

    /** @var FeeItem[] */
    private array $items = [];

    public function __construct(array $items = [], ?Country $geo = null)
    {
        $this->geo = $geo;
        $this->items = $items;
    }

    public function setGeo(Country $geo): self
    {
        $this->geo = $geo;
        return $this;
    }

    public function addItem(FeeItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function toArray(): array
    {
        if (empty($this->items)) {
            throw GeoFeeException::emptyItems();
        }

        return [
            'geo'   => $this->geo ? (string)$this->geo : self::DEFAULT_GEO,
            'items' => array_map(fn(FeeItem $item) => $item->toArray(), $this->items),
        ];
    }
}
