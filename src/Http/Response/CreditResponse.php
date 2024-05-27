<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Payment;

class CreditResponse extends AbstractResponse implements ResponseInterface
{
    public function getPayment(): Payment
    {
        return new Payment($this->data);
    }
}
