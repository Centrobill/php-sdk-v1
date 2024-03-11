<?php

namespace Centrobill\Sdk\Http\Request;

class GetExchangeRateByIso3Request implements RequestInterface
{
    public function getUri()
    {
        return '/currency-exchange-rate/{iso3}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_GET;
    }

    public function getPayload()
    {
        // TODO: Implement getPayload() method.
    }
}
