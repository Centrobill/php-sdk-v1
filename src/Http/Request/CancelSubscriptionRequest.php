<?php

namespace Centrobill\Sdk\Http\Request;

class CancelSubscriptionRequest implements RequestInterface
{
    public function getUri()
    {
        return '/subscription/{id}/cancel';
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
