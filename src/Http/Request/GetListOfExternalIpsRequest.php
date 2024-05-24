<?php

namespace Centrobill\Sdk\Http\Request;

class GetListOfExternalIpsRequest implements RequestInterface
{
    public function getUri(): string
    {
        return 'ips';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getPayload(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return [];
    }
}
