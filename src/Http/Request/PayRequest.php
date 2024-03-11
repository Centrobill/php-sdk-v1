<?php

namespace Centrobill\Sdk\Http\Request;

class PayRequest implements RequestInterface
{
    public function getUri()
    {
        return '/payment';
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
