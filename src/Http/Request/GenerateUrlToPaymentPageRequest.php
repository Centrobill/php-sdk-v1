<?php

namespace Centrobill\Sdk\Http\Request;

class GenerateUrlToPaymentPageRequest implements RequestInterface
{
    public function getUri()
    {
        return '/paymentPage';
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
