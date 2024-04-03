<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\SiteName;


class GetApplePaySessionRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var SiteName $domain
     */
    private SiteName $domain;

    public function __construct(ApiKey $apiKey, SiteName $domain)
    {
        $this->apiKey = $apiKey;
        $this->domain = $domain;
    }

    public function getPayload(): array
    {
        $data = [
            'domain' => (string)$this->domain,
        ];

        return $data;
    }

    public function getUri(): string
    {
        return 'payment/applePaySession';
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
}
