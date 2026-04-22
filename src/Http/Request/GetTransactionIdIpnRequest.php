<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class GetTransactionIdIpnRequest implements RequestInterface
{
    /**
     * @var Id $transactionId
     */
    private Id $transactionId;

    public function __construct(Id $transactionId)
    {
        $this->transactionId = $transactionId;
    }

    public function getPayload(): array
    {
        return [];
    }

    public function getUri(): string
    {
        return sprintf('transaction/%s/ipn', $this->transactionId);
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
