<?php

namespace Centrobill\Sdk\Http\Request;

class CheckVerificationCodeRequest implements RequestInterface
{
    public function getUri()
    {
        return '/antifraud/verification/{phone}/{code}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_GET;
    }

    public function getPayload()
    {
        // TODO: Implement getPayload() method.
    }
}
