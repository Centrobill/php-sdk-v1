<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\SDK\Http\Response\ResponseInterface;
use Centrobill\Sdk\Utils\Utils;


class UpdateProductResponse implements ResponseInterface
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
