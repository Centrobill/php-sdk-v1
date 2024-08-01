<?php

namespace Centrobill\Sdk\Http\Response;

class EnablePaymentAccountForQuickSaleResponse implements ResponseInterface
{
    private string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
