<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class ExchangeRate
{
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getIso3()
    {
        return $this->data->iso3;
    }

    public function getUsdPerUnit()
    {
        return $this->data->usdPerUnit;
    }

    public function getUnitPerUsd()
    {
        return $this->data->unitPerUsd;
    }
}
