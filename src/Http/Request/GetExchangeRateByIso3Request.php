<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Currency;

class GetExchangeRateByIso3Request implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Currency $currency
     */
    private Currency $currency;

    public function __construct(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function getUri(): string
    {
        return sprintf('currency-exchange-rate/%s', $this->currency);
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
