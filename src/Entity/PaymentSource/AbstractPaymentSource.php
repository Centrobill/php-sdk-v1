<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\Mid;

abstract class AbstractPaymentSource
{
    protected ?Mid $mid = null;

    abstract public function getType(): string;

    public function toArray(): array
    {
        if ($this->mid !== null) {
            return [
                'mid' => (string)$this->mid,
            ];
        }

        return [];
    }

    public function setMid(Mid $mid): self
    {
        $this->mid = $mid;
        return $this;
    }
}
