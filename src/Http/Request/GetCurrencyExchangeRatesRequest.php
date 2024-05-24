<?php

namespace Centrobill\Sdk\Http\Request;

class GetCurrencyExchangeRatesRequest implements RequestInterface
{
    public function getUri(): string
    {
        return 'currency-exchange-rate';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }

    public function getPayload(): array
    {
        return [];
    }
}
