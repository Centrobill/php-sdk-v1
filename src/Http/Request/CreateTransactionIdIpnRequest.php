<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Url;

class CreateTransactionIdIpnRequest implements RequestInterface
{
    private Id $id;

    private Url $url;

    public function __construct(Id $id, Url $url)
    {
        $this->id = $id;
        $this->url = $url;
    }

    public function getPayload(): array
    {
        return [
            'url' => (string)$this->url,
        ];
    }

    public function getUri(): string
    {
        return sprintf('transaction/%s/ipn', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [];
    }
}
