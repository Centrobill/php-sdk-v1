<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\SiteName;

class GetApplePaySessionRequest implements RequestInterface
{
    /**
     * @var SiteName $domain
     */
    private SiteName $domain;

    public function __construct(SiteName $domain)
    {
        $this->domain = $domain;
    }

    public function getPayload(): array
    {
        return [
            'domain' => (string)$this->domain,
        ];
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
        ];
    }
}
