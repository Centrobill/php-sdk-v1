<?php

namespace Centrobill\Sdk\Http\Request;

class PayoutRequest implements RequestInterface
{
    public function getUri()
    {
        return '/payout';
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
