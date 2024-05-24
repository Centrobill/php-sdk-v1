<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Offset;

class Price
{
    /**
     * @var ?Offset $offset
     */
    private ?Offset $offset;

    /**
     * @var ?Amount $amount
     */
    private ?Amount $amount;

    /**
     * @var ?Currency $currency
     */
    private ?Currency $currency;

    /**
     * @var bool $repeat
     */
    private $repeat;

    public function __construct(
        ?Offset $offset = null,
        ?Amount $amount = null,
        ?Currency $currency = null,
        $repeat = false
    ) {
        $this->offset = $offset;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->repeat = $repeat;
    }

    public function setOffset(Offset $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function setAmount(Amount $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCurrency(Currency $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function setRepeat($repeat): self
    {
        $this->repeat = $repeat;
        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->offset !== null) {
            $data['offset'] = (string)$this->offset;
        }

        if ($this->amount !== null) {
            $data['amount'] = $this->amount->getValue();
        }

        if ($this->currency !== null) {
            $data['currency'] = (string)$this->currency;
        }

        if ($this->repeat !== null) {
            $data['repeat'] = $this->repeat;
        }

        return $data;
    }
}
