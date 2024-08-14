<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class PaymentAccount
{
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getMethod(): ?string
    {
        return $this->data->method ?? null;
    }

    public function getNumber(): ?string
    {
        return $this->data->number ?? null;
    }

    public function getPaymentAccountId(): ?string
    {
        return $this->data->paymentAccountId ?? null;
    }

    public function getBrand(): ?string
    {
        return $this->data->brand ?? null;
    }

    public function getExpirationMonth(): ?string
    {
        return $this->data->expirationMonth ?? null;
    }

    public function getExpirationYear(): ?string
    {
        return $this->data->expirationYear ?? null;
    }

    public function isDisabled(): bool
    {
        return $this->data->disabled;
    }
}
