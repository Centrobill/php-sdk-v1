<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

class Consumer
{
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getId(): ?string
    {
        return isset($this->data->id) ? (string)$this->data->id : null;
    }

    public function getExternalId(): ?string
    {
        return $this->data->externalId ?? null;
    }

    public function getEmail(): ?string
    {
        return $this->data->email ?? null;
    }

    public function getFirstName(): ?string
    {
        return $this->data->firstName ?? null;
    }

    public function getLastName(): ?string
    {
        return $this->data->lastName ?? null;
    }

    public function getPhone(): ?string
    {
        return $this->data->phone ?? null;
    }

    public function getCountry(): ?string
    {
        return $this->data->country ?? null;
    }

    public function getState(): ?string
    {
        return $this->data->state ?? null;
    }

    public function getCity(): ?string
    {
        return $this->data->city ?? null;
    }

    public function getZip(): ?string
    {
        return $this->data->zip ?? null;
    }

    public function getGroupId(): ?string
    {
        return $this->data->groupId ?? null;
    }

    public function getUsername(): ?string
    {
        return $this->data->username ?? null;
    }

    public function getBirthday(): ?string
    {
        return $this->data->birthday ?? null;
    }

    public function isBlocked(): bool
    {
        return (bool)$this->data->blocked;
    }

    public function getCreatedAt(): ?Timestamp
    {
        return isset($this->data->createdAt) ? new Timestamp($this->data->createdAt) : null;
    }

    public function getUpdatedAt(): ?Timestamp
    {
        return isset($this->data->updatedAt) ? new Timestamp($this->data->updatedAt) : null;
    }
}
