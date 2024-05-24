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

    public function getId()
    {
        return $this->data->id;
    }

    public function getType()
    {
        return $this->data->type;
    }

    public function getEmulate3ds()
    {
        return $this->data->emulate3ds;
    }

    public function getNumber()
    {
        return $this->data->number;
    }

    public function getBalance()
    {
        return $this->data->balance;
    }

    public function getBlocked()
    {
        return $this->data->blocked;
    }

    public function getAllowedIps()
    {
        return $this->data->allowedIps;
    }

    public function getCreatedAt()
    {
        return $this->data->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->data->updatedAt;
    }
}