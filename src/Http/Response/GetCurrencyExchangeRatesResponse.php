<?php

namespace Centrobill\Sdk\Http\Response;

class GetCurrencyExchangeRatesResponse implements ResponseInterface
{
    private array $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function isSuccessful()
    {
        return true;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
