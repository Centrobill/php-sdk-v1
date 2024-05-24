<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;

class DeleteTestPaymentDataByIDRequest implements RequestInterface
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
        return sprintf('testPaymentData/%s', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_DELETE;
    }

    /**
     * Get headers
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => (string)$this->apiKey,
        ];
    }

    /**
     * Get request data
     *
     * @return array
     */
    public function getPayload(): array
    {
        return [];
    }
}
