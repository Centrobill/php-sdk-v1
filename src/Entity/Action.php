<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Type;

class Action
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Id $id
     */
    private Id $id;

    public function __construct(Type $type = null, Id $id = null)
    {
        $this->type = $type;
        $this->id = $id;
    }

    public function setType(Type $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setId(Id $id)
    {
        $this->id = $id;
        return $this;
    }

    public function toArray()
    {
        $data = [];

        if ($this->type !== null) {
            $data['type'] = (string)$this->type;
        }

        if ($this->id !== null) {
            $data['id'] = (string)$this->id;
        }

        return $data;
    }
}
