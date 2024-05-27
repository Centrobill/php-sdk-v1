<?php

namespace Centrobill\Sdk\Entity\Sku;

use Centrobill\Sdk\ValueObject\ActionType;
use Centrobill\Sdk\ValueObject\Id;

class Action
{
    /**
     * @var ?ActionType $type
     */
    private ?ActionType $type;

    /**
     * @var ?Id $id
     */
    private ?Id $id;

    public function __construct(ActionType $type = null, Id $id = null)
    {
        $this->type = $type;
        $this->id = $id;
    }

    public function setType(ActionType $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setId(Id $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function toArray(): array
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
