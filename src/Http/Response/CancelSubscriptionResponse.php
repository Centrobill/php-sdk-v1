<?php

namespace Centrobill\Sdk\Http\Response;

class CancelSubscriptionResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return true;
    }

    public function getId(): string
    {
        return $this->data->id;
    }

    public function getStatus(): string
    {
        return $this->data->status;
    }

    public function getCycle(): int
    {
        return $this->data->cycle;
    }

    public function getSkuName(): string
    {
        return $this->data->skuName;
    }

    public function getSiteId(): string
    {
        return $this->data->siteId;
    }

    public function getRenewalDate(): string
    {
        return $this->data->renewalDate;
    }

    public function getCancelDate(): string
    {
        return $this->data->cancelDate;
    }

    public function getConsumerId(): string
    {
        return $this->data->consumerId;
    }
}
