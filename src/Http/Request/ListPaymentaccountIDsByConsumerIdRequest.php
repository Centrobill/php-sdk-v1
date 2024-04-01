<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class ListPaymentaccountIDsByConsumerIdRequest implements RequestInterface
{
    /**
     * @var id $id
     */
    private Id $id;

    public function __construct(Id $id)
    {
        $this->id = $id;
    }

    public function getUri(): string
    {
        return sprintf('consumer/%s/paymentAccounts', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getPayload(): array
    {
        return [];
    }
}
