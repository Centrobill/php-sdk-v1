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
        return isset($this->data->method) ? $this->data->method : null;
    }

    public function getNumber(): ?string
    {
        return isset($this->data->number) ? $this->data->number : null;
    }

    public function getPaymentAccountId(): ?string
    {
        return isset($this->data->paymentAccountId) ? $this->data->paymentAccountId : null;
    }

    public function getBrand(): ?string
    {
        return isset($this->data->brand) ? $this->data->brand : null;
    }

    public function getExpirationMonth(): ?string
    {
        return isset($this->data->expirationMonth) ? $this->data->expirationMonth : null;
    }

    public function getExpirationYear(): ?string
    {
        return isset($this->data->expirationYear) ? $this->data->expirationYear : null;
    }

    public function isDisabled(): bool
    {
        return $this->data->disabled;
    }
}
