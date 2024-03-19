<?php

namespace Centrobill\Sdk\Http\Request;

class UnblockTestPaymentDataRequest implements RequestInterface
{
    public function getUri()
    {
        return '/testPaymentData/{id}/unblock';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
