<?php

namespace Centrobill\Sdk\Http\Request;

class GetChargebackIdRepaidLinkRequest implements RequestInterface
{
    public function getUri()
    {
        return '/chargeback/{id}/repaidLink';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_GET;
    }
}
