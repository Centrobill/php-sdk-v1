<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;

class UnblockTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var Id $id
     */
    private Id $id;

    public function __construct(ApiKey $apiKey, Id $id)
    {
        $this->apiKey = $apiKey;
        $this->id = $id;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/unblock', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => (string)$this->apiKey,
        ];
    }

    public function getPayload(): array
    {
        return [];
    }
}
