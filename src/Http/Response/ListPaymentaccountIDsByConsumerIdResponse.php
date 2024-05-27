<?php

namespace Centrobill\Sdk\Http\Response;

class ListPaymentAccountIDsByConsumerIdResponse implements ResponseInterface
{
    private array $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
