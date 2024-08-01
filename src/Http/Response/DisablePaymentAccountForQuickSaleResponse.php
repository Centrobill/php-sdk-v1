<?php

namespace Centrobill\Sdk\Http\Response;

class DisablePaymentAccountForQuickSaleResponse implements ResponseInterface
{
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
