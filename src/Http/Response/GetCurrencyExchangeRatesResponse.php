<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\ExchangeRate;

class GetCurrencyExchangeRatesResponse implements ResponseInterface
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return ExchangeRate[]
     */
    public function getExchangeRates(): array
    {
        return array_map(function ($exchangeRate) {
            return new ExchangeRate($exchangeRate);
        }, $this->data);
    }

    public function getData(): array
    {
        return $this->data;
    }
}
