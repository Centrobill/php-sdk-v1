<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Consumer;
use Centrobill\Sdk\Http\Response\Entity\Payment;
use Centrobill\Sdk\Http\Response\Entity\Subscription;
use Centrobill\Sdk\Utils\Utils;

class ChangePaymentAccountForSubscriptionResponse extends AbstractResponse implements ResponseInterface
{
    public function getPayment(): Payment
    {
        return new Payment($this->data->payment);
    }

    public function getConsumer(): Consumer
    {
        return new Consumer($this->data->consumer);
    }

    public function getSubscription(): Subscription
    {
        return new Subscription($this->data->subscription);
    }

    public function getMetadata(): array
    {
        return Utils::convertObjectToArray($this->data->metadata);
    }
}
