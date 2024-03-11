<?php

namespace Centrobill\Sdk\Http\Request;

class CreateSiteRequest implements RequestInterface
{
    public function getUri()
    {
        return '/site';
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
