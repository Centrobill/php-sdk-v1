<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class UnblockTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    public function __construct(Id $id)
    {
        $this->id = $id;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/unblock', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getPayload(): array
    {
        return [];
    }
}
