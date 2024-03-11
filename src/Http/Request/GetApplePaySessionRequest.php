<?php

namespace Centrobill\Sdk\Http\Request;

class GetApplePaySessionRequest implements RequestInterface
{
    public function getUri()
    {
        return '/payment/applePaySession';
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
