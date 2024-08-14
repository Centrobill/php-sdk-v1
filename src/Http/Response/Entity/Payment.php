<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use Centrobill\Sdk\Utils\Utils;
use stdClass;

final class Payment
{
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getCode(): ?string
    {
        return $this->data->code ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->data->description ?? null;
    }

    public function getAction(): ?string
    {
        return $this->data->action ?? null;
    }

    public function getUrl(): ?string
    {
        return $this->data->url ?? null;
    }

    public function getMode(): ?string
    {
        return $this->data->mode ?? null;
    }

    public function getStatus(): ?string
    {
        return $this->data->status ?? null;
    }

    public function getAmount(): ?float
    {
        return $this->data->amount ?? null;
    }

    public function getCurrency(): ?string
    {
        return $this->data->currency ?? null;
    }

    public function getAmountUsd(): ?float
    {
        return $this->data->amountUsd ?? null;
    }

    public function getOrderId(): ?string
    {
        return $this->data->orderId ?? null;
    }

    public function getTransactionId(): ?string
    {
        return $this->data->transactionId ?? null;
    }

    public function getDescriptor(): ?string
    {
        return $this->data->descriptor ?? null;
    }

    public function getApiPaymentSource(): ?string
    {
        return $this->data->apiPaymentSource ?? null;
    }

    public function getSource(): array
    {
        return isset($this->data->source) ? Utils::convertObjectToArray($this->data->source) : [];
    }

    public function getTimestamp(): ?Timestamp
    {
        return isset($this->data->timestamp) ? new Timestamp($this->data->timestamp) : null;
    }
}
