<?php

namespace Centrobill\Sdk\Http\Response;

class GetListOfExternalIpsResponse implements ResponseInterface
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
