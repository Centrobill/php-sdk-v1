<?php

namespace Centrobill\Sdk\Http\Request;

class DisablePaymentAccountForQuickSaleRequest implements RequestInterface
{
    public function getUri()
    {
        return 'paymentAccount/{paymentAccountId}/disable';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
