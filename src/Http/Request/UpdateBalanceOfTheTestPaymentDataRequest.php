<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Balance;

class UpdateBalanceOfTheTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var Balance $balance
     */
    private Balance $balance;

    public function __construct(Balance $balance = null)
    {
        $this->balance = $balance;
    }

    public function setBalance(Balance $balance)
    {
        $this->balance = $balance;
        return $this;
    }

    public function getPayload()
    {
        $data = [];

        if ($this->balance !== null) {
            $data['balance'] = (string)$this->balance;
        }

        return $data;
    }

    public function getUri()
    {
        return '/testPaymentData/{id}/balance';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }
}
