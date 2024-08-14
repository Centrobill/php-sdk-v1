<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Id;

class UpdateBalanceOfTheTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var Amount $balance
     */
    private Amount $balance;

    public function __construct(Id $id, Amount $balance)
    {
        $this->id = $id;
        $this->balance = $balance;
    }

    public function setBalance(Amount $balance): UpdateBalanceOfTheTestPaymentDataRequest
    {
        $this->balance = $balance;
        return $this;
    }

    public function getPayload(): array
    {
        return [
            'balance' => $this->balance->getValue(),
        ];
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/balance', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
