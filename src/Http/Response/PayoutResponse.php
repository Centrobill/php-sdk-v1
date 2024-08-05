<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Consumer;
use Centrobill\Sdk\Http\Response\Entity\Payment;
use Centrobill\Sdk\Http\Response\Traits\HasMetadata;

class PayoutResponse extends AbstractResponse implements ResponseInterface
{
    use HasMetadata;

    public function getPayment(): Payment
    {
        return new Payment($this->data->payment);
    }

    public function getConsumer(): Consumer
    {
        return new Consumer($this->data->consumer);
    }
}
