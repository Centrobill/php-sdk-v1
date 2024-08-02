<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\ExchangeRate;

class GetExchangeRateByIso3Response extends AbstractResponse implements ResponseInterface
{
    public function getExchangeRate(): ExchangeRate
    {
        return new ExchangeRate($this->data);
    }
}
