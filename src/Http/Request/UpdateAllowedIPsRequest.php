<?php

namespace Centrobill\Sdk\Http\Request;

class UpdateAllowedIPsRequest implements RequestInterface
{
    public function getUri()
    {
        return '/testPaymentData/{id}/allowedIps';
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
