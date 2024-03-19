<?php

namespace Centrobill\Sdk\Http\Request;

class GetCurrencyExchangeRatesRequest implements RequestInterface
{
    public function getUri()
    {
        return '/currency-exchange-rate';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_GET;
    }
}
