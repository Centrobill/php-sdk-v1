<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Subscription;

class GetSubscriptionResponse extends AbstractResponse implements ResponseInterface
{
    public function getSubscription(): Subscription
    {
        return new Subscription($this->data);
    }
}
