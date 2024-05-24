<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class Sku
{
    /**
     * @var stdClass $data
     */
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getName(): string
    {
        return $this->data->name;
    }

    public function getSiteId(): string
    {
        return $this->data->siteId;
    }

    public function getExternalId(): string
    {
        return $this->data->externalId;
    }

    public function getTitle(): string
    {
        return $this->data->title;
    }

    public function getPrice(): float
    {
        return $this->data->price;
    }

    public function getCurrency(): string
    {
        return $this->data->currency;
    }

    public function getCreatedAt(): string
    {
        return $this->data->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->data->updatedAt;
    }
}