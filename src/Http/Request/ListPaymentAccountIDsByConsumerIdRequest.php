<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class ListPaymentAccountIDsByConsumerIdRequest implements RequestInterface
{
    /**
     * @var Id $id
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
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }

    public function getPayload(): array
    {
        return [];
    }
}
