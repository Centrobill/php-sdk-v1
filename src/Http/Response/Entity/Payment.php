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
        return isset($this->data->code) ? $this->data->code : null;
    }

    public function getDescription(): ?string
    {
        return isset($this->data->description) ? $this->data->description : null;
    }

    public function getAction(): ?string
    {
        return isset($this->data->action) ? $this->data->action : null;
    }

    public function getUrl(): ?string
    {
        return isset($this->data->url) ? $this->data->url : null;
    }

    public function getMode(): ?string
    {
        return isset($this->data->mode) ? $this->data->mode : null;
    }

    public function getStatus(): ?string
    {
        return isset($this->data->status) ? $this->data->status : null;
    }

    public function getAmount(): ?float
    {
        return isset($this->data->amount) ? $this->data->amount : null;
    }

    public function getCurrency(): ?string
    {
        return isset($this->data->currency) ? $this->data->currency : null;
    }

    public function getAmountUsd(): ?float
    {
        return isset($this->data->amountUsd) ? $this->data->amountUsd : null;
    }

    public function getOrderId(): ?string
    {
        return isset($this->data->orderId) ? $this->data->orderId : null;
    }

    public function getTransactionId(): ?string
    {
        return isset($this->data->transactionId) ? $this->data->transactionId : null;
    }

    public function getDescriptor(): ?string
    {
        return isset($this->data->descriptor) ? $this->data->descriptor : null;
    }

    public function getApiPaymentSource(): ?string
    {
        return isset($this->data->apiPaymentSource) ? $this->data->apiPaymentSource : null;
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
