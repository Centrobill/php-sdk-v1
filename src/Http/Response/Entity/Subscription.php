<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

class Subscription
{
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getId(): int
    {
        return $this->data->id;
    }

    public function getStatus(): string
    {
        return $this->data->status;
    }

    public function getRenewalDate(): string
    {
        return $this->data->renewalDate;
    }

    public function getCancelDate(): string
    {
        return $this->data->cancelDate;
    }

    public function getCycle(): int
    {
        return $this->data->cycle;
    }

    public function getSkuName(): ?string
    {
        return isset($this->data->skuName) ? $this->data->skuName : null;
    }

    public function getSiteId(): ?string
    {
        return isset($this->data->siteId) ? $this->data->siteId : null;
    }

    public function getConsumerId(): ?string
    {
        return isset($this->data->consumerId) ? $this->data->consumerId : null;
    }
}
