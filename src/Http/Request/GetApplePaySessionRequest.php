<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\DomainName;

class GetApplePaySessionRequest implements RequestInterface
{
    /**
     * @var DomainName $domain
     */
    private DomainName $domain;

    public function __construct(DomainName $domain)
    {
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
        ];
    }
}
