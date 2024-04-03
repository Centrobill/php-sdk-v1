<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Phone;

class GetAvailableChannelsOfCodeVerificationRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var Phone $phone
     */
    private Phone $phone;
    
    public function __construct(ApiKey $apiKey, Phone $phone)
    {
        $this->apiKey = $apiKey;
        $this->phone = $phone;
    }

    public function getUri(): string
    {
        return sprintf('antifraud/verification/%s', (string)$this->phone);
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

    public function getPayload(): array
    {
        return [];
    }
}
