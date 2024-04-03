<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;

class UpdateBalanceOfTheTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var Amount $amount
     */
    private Amount $amount;

    public function __construct(ApiKey $apiKey, Id $id, Amount $amount)
    {
        $this->apiKey = $apiKey;
        $this->id = $id;
        $this->amount = $amount;
    }

    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [];

        if ($this->amount !== null) {
            $data['amount'] = $this->amount->getValue();
        }

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/balance', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => (string)$this->apiKey,
        ];
    }
}
