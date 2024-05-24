<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class Site
{
    /**
     * @var stdClass $data
     */
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getId(): string
    {
        return $this->data->id;
    }

    public function getName(): string
    {
        return $this->data->name;
    }

    public function getExternalId(): string
    {
        return $this->data->externalId;
    }

    public function getIpnUrl(): string
    {
        return $this->data->ipnUrl;
    }

    public function getRedirectUrl(): string
    {
        return $this->data->redirectUrl;
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
