<?php

namespace Centrobill\Sdk\Http\Request;

class BlockTestPaymentDataRequest implements RequestInterface
{
    public function getUri()
    {
        return '/testPaymentData/{id}/block';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
