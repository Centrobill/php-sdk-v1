<?php

namespace Centrobill\Sdk\Http\Request;

class SendMessageWithVerificationCodeRequest implements RequestInterface
{
    public function getUri()
    {
        return '/antifraud/verification/{channel}/send';
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
