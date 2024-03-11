<?php

namespace Centrobill\Sdk\Http\Request;

class RecoverSubscriptionRequest implements RequestInterface
{
    public function getUri()
    {
        return '/subscription/{id}/recover';
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
