<?php

namespace Centrobill\Sdk\Http\Request;

class GenerateCardDataTokenRequest implements RequestInterface
{
    public function getUri()
    {
        return '/tokenize';
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
