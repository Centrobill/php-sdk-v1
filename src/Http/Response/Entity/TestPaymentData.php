<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class TestPaymentData
{
    /**
     * @var stdClass $data
     */
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getId(): int
    {
        return $this->data->id;
    }

    public function getType(): string
    {
        return $this->data->type;
    }

    public function getComment(): ?string
    {
        return $this->data->comment ?? null;
    }

    public function getTransactions(): int
    {
        return $this->data->transactions;
    }

    public function isEmulate3ds(): bool
    {
        return $this->data->emulate3ds;
    }

    public function getNumber(): string
    {
        return $this->data->number;
    }

    public function getBalance(): float
    {
        return (float)$this->data->balance;
    }

    public function isBlocked(): bool
    {
        return $this->data->blocked;
    }

    public function isExpired(): bool
    {
        return $this->data->expired;
    }

    public function getAllowedIps(): array
    {
        return $this->data->allowedIps;
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
