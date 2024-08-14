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
        return $this->data->type ?? null;
    }

    public function getStatus(): string
    {
        return $this->data->status;
    }

    public function getRenewalDate(): ?string
    {
        return $this->data->renewalDate ?? null;
    }

    public function getCancelDate(): ?string
    {
        return $this->data->cancelDate ?? null;
    }

    public function getCycle(): int
    {
        return $this->data->cycle;
    }

    public function getSkuName(): ?string
    {
        return $this->data->skuName ?? null;
    }

    public function getSiteId(): ?string
    {
        return $this->data->siteId ?? null;
    }

    public function getConsumerId(): ?string
    {
        return $this->data->consumerId ?? null;
    }

    public function getEventTime(): ?string
    {
        return $this->data->eventTime ?? null;
    }

    public function getTimezone(): ?string
    {
        return $this->data->timezone ?? null;
    }
}
