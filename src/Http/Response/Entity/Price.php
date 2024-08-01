<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class Price
{
    /**
     * @var stdClass $data
     */
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getAmount(): float
    {
        return (float)$this->data->amount;
    }

    public function getCurrency(): string
    {
        return $this->data->currency;
    }

    public function getOffset(): string
    {
        return $this->data->offset;
    }

    public function isRepeat(): bool
    {
        return (bool)$this->data->repeat;
    }
}
