<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Currency;

class GetExchangeRateByIso3Request implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var Currency $currency
     */
    private Currency $currency;

    public function __construct(ApiKey $apiKey, Currency $currency)
    {
        $this->apiKey = $apiKey;
        $this->currency = $currency;
    }

    public function getUri(): string
    {
        return sprintf('currency-exchange-rate/%s', (string)$this->currency);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => (string)$this->apiKey,
        ];
    }

    public function getPayload(): array
    {
        return [];
    }
}
