<?php

namespace Centrobill\Sdk\Http\Request;

class UpdateBalanceOfTheTestPaymentDataRequest implements RequestInterface
{
    public function getUri()
    {
        return '/testPaymentData/{id}/balance';
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
