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

    public function getType()
    {
        return isset($this->data->type) ? $this->data->type : null;
    }

    public function getStatus(): string
    {
        return $this->data->status;
    }

    public function getRenewalDate(): string
    {
        return isset($this->data->renewalDate) ? $this->data->renewalDate : null;
    }

    public function getCancelDate(): ?string
    {
        return isset($this->data->cancelDate) ? $this->data->cancelDate : null;
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

    public function getEventTime(): ?string
    {
        return isset($this->data->eventTime) ? $this->data->eventTime : null;
    }

    public function getTimezone(): ?string
    {
        return isset($this->data->timezone) ? $this->data->timezone : null;
    }
}
