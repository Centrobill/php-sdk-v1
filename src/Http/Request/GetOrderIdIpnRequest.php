<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class GetOrderIdIpnRequest implements RequestInterface
{
    /**
     * @var Id $orderId
     */
    private Id $orderId;

    public function __construct(Id $orderId)
    {
        $this->orderId = $orderId;
    }

    public function getPayload(): array
    {
        return [];
    }

    public function getUri(): string
    {
        return sprintf('order/%s/ipn', $this->orderId);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        return [];
    }
}
