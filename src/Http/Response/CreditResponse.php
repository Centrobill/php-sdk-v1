<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Utils\Utils;


class CreditResponse implements ResponseInterface
{
    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function isSuccessful()
    {
        return true;
    }

    public function getData()
    {
        return [];
    }
}
