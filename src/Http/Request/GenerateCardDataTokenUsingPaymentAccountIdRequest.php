<?php

namespace Centrobill\Sdk\Http\Request;

class GenerateCardDataTokenUsingPaymentAccountIdRequest implements RequestInterface
{
    public function getUri()
    {
        return '/tokenizeWithPaymentAccountId';
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
