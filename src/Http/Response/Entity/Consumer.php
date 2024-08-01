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
        return isset($this->data->externalId) ? $this->data->externalId : null;
    }

    public function getEmail(): ?string
    {
        return isset($this->data->email) ? $this->data->email : null;
    }

    public function getFirstName(): ?string
    {
        return isset($this->data->firstName) ? $this->data->firstName : null;
    }

    public function getLastName(): ?string
    {
        return isset($this->data->lastName) ? $this->data->lastName : null;
    }

    public function getPhone(): ?string
    {
        return isset($this->data->phone) ? $this->data->phone : null;
    }

    public function getCountry(): ?string
    {
        return isset($this->data->country) ? $this->data->country : null;
    }

    public function getState(): ?string
    {
        return isset($this->data->state) ? $this->data->state : null;
    }

    public function getCity(): ?string
    {
        return isset($this->data->city) ? $this->data->city : null;
    }

    public function getZip(): ?string
    {
        return isset($this->data->zip) ? $this->data->zip : null;
    }

    public function getGroupId(): ?string
    {
        return isset($this->data->groupId) ? $this->data->groupId : null;
    }

    public function getUsername(): ?string
    {
        return isset($this->data->username) ? $this->data->username : null;
    }

    public function getBirthday(): ?string
    {
        return isset($this->data->birthday) ? $this->data->birthday : null;
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
