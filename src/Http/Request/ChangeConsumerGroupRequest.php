<?php

namespace Centrobill\Sdk\Http\Request;

class ChangeConsumerGroupRequest implements RequestInterface
{
    public function getUri()
    {
        return '/consumer/{id}';
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
