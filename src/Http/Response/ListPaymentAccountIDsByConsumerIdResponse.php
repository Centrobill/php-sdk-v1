<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\PaymentAccount;

class ListPaymentAccountIDsByConsumerIdResponse implements ResponseInterface
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getPaymentAccounts()
    {
        return array_map(function ($paymentAccount) {
            return new PaymentAccount($paymentAccount);
        }, $this->data);
    }

    public function getData()
    {
        return $this->data;
    }
}
