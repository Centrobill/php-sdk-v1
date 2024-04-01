<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Domain;

class GetApplePaySessionRequest implements RequestInterface
{
    /**
     * @var Domain $domain
     */
    private Domain $domain;

    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
    }

    public function getPayload()
    {
        $data = [
            'domain' => (string)$this->domain,
        ];

        return $data;
    }

    public function getUri()
    {
        return 'payment/applePaySession';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
