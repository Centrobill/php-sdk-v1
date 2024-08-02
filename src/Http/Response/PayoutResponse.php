<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Consumer;
use Centrobill\Sdk\Http\Response\Entity\Payment;

class PayoutResponse extends AbstractResponse implements ResponseInterface
{
    public function getPayment(): Payment
    {
        return new Payment($this->data->payment);
    }

    public function getConsumer(): Consumer
    {
        return new Consumer($this->data->consumer);
    }

    public function getMetadata(): array
    {
        return $this->data->metadata;
    }
}
