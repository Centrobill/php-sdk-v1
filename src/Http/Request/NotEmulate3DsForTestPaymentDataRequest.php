<?php

namespace Centrobill\Sdk\Http\Request;

class NotEmulate3DsForTestPaymentDataRequest implements RequestInterface
{
    public function getUri()
    {
        return '/testPaymentData/{id}/notEmulate3ds';
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
