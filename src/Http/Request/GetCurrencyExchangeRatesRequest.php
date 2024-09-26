<?php

namespace Centrobill\Sdk\Http\Request;

class GetCurrencyExchangeRatesRequest implements RequestInterface
{
    use HasRequestId;

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
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-ID' => $this->getRequestId(),
            ];
        }

        return [];
    }

    public function getPayload(): array
    {
        return [];
    }
}
