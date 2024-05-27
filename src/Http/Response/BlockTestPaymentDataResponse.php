<?php

namespace Centrobill\Sdk\Http\Response;

class BlockTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{
    public function getId()
    {
        return $this->data->id;
    }

    public function getType()
    {
        return $this->data->type;
    }

    public function emulate3ds(): bool
    {
        return $this->data->emulate3ds ?? false;
    }

    public function getNumber()
    {
        return $this->data->number;
    }

    public function getBalance()
    {
        return $this->data->balance;
    }

    public function isBlocked(): bool
    {
        return $this->data->blocked ?? false;
    }

    public function getAllowedIps(): array
    {
        return $this->data->allowedIps;
    }
}
