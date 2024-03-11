<?php

namespace Centrobill\Sdk\Http\Request;

class UpdateProductRequest implements RequestInterface
{
    public function getUri()
    {
        return '/sku/{name}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getPayload()
    {
        // TODO: Implement getPayload() method.
    }
}
