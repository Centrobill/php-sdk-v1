<?php

namespace Centrobill\Sdk\Http\Request;

class UpdateSiteRequest implements RequestInterface
{
    public function getUri()
    {
        return '/site/{id}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getPayload()
    {
        // TODO: Implement getPayload() method.
    }
}
