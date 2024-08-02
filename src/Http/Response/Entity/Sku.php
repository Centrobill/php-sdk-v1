<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use Centrobill\Sdk\Http\Response\Entity\Price;
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

    public function getType()
    {
        return $this->data->type;
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

    public function isShowOnPaymentPage(): bool
    {
        return $this->data->showOnPaymentPage;
    }

    public function getPrice(): mixed
    {
        if (is_numeric($this->data->price)) {
            return $this->data->price;
        }

        return array_map(function ($price) {
            return new Price($price);
        }, $this->data->price);
    }

    public function getCurrency(): ?string
    {
        return isset($this->data->currency) ? $this->data->currency : null;
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