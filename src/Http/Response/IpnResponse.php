<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Consumer;
use Centrobill\Sdk\Http\Response\Entity\Payment;
use Centrobill\Sdk\Http\Response\Entity\Subscription;
use Centrobill\Sdk\Http\Response\Traits\HasMetadata;

class IpnResponse extends AbstractResponse
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

    public function getSubscription(): ?Subscription
    {
        return isset($this->data->subscription) ? new Subscription($this->data->subscription) : null;
    }
}
