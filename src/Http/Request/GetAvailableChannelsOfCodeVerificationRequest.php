<?php

namespace Centrobill\Sdk\Http\Request;

class GetAvailableChannelsOfCodeVerificationRequest implements RequestInterface
{
    public function getUri()
    {
        return 'antifraud/verification/{phone}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_GET;
    }
}
