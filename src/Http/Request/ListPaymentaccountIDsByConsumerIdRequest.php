<?php

namespace Centrobill\Sdk\Http\Request;

class ListPaymentaccountIDsByConsumerIdRequest implements RequestInterface
{
    public function getUri()
    {
        return 'consumer/{id}/paymentAccounts';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_GET;
    }
}
