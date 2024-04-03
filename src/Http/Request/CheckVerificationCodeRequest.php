<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Code;
use Centrobill\Sdk\ValueObject\Phone;

class CheckVerificationCodeRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var Phone $phone
     */
    private Phone $phone;

    /**
     * @var Code $code
     */
    private Code $code;

    public function __construct(ApiKey $apiKey, Phone $phone, Code $code)
    {
        $this->apiKey = $apiKey;
        $this->phone = $phone;
        $this->code = $code;
    }

    public function getUri(): string 
    {
        return sprintf('antifraud/verification/%s/%s', (string)$this->phone, (string)$this->code);
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
