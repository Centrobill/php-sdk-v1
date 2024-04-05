<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Subscription;

class ChangeSubscriptionResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }

    public function getSubscription(): Subscription
    {
        return new Subscription($this->data);
    }
}
