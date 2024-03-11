<?php

namespace Centrobill\Sdk\Http\Request;

class CreateProductRequest implements RequestInterface
{
    public function getUri()
    {
        return '/sku';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }

    public function getPayload()
    {
        // TODO: Implement getPayload() method.
    }
}
