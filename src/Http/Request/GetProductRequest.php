<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Sku\Name;

class GetProductRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var Name $name
     */
    private Name $name;

    public function __construct(ApiKey $apiKey, Name $name) {
        $this->apiKey = $apiKey;
        $this->name = $name;
    }

    public function getPayload(): array
    {
        return [];
    }

    public function getUri(): string
    {
        return sprintf('sku/%s', (string)$this->name);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => (string)$this->apiKey,
        ];
    }
}
