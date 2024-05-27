<?php

namespace Centrobill\Sdk\Http\Response;

class ChangeConsumerGroupResponse extends AbstractResponse implements ResponseInterface
{
    public function getId(): string
    {
        return $this->data->id;
    }

    public function getExternalId(): string
    {
        return $this->data->externalId;
    }

    public function getUsername(): string
    {
        return $this->data->username;
    }

    public function getEmail(): string
    {
        return $this->data->email;
    }

    public function getFirstName(): string
    {
        return $this->data->firstName;
    }

    public function getLastName(): string
    {
        return $this->data->lastName;
    }

    public function getBirthday(): string
    {
        return $this->data->birthday;
    }

    public function getCountry(): string
    {
        return $this->data->country;
    }
}
