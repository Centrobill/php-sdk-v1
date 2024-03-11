<?php

namespace Centrobill\Sdk\Http\Request;

class EnablePaymentAccountForQuickSaleRequest implements RequestInterface
{
    public function getUri()
    {
        return '/paymentAccount/{paymentAccountId}/enable';
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
