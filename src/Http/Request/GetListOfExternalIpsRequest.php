<?php

namespace Centrobill\Sdk\Http\Request;

class GetListOfExternalIpsRequest implements RequestInterface
{
    public function getUri()
    {
        return '/ips';
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
