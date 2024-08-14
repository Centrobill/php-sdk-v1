<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AmountException;

final class Amount
{
    private float $value;

    /**
     * Amount constructor.
     *
     * @param mixed $value
     * @throws AmountException
     */
    public function __construct($value)
    {
        if (filter_var($value, FILTER_VALIDATE_FLOAT) === false || (float)$value < 0) {
            throw AmountException::invalidValue();
        }

        $this->value = (float)$value;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
}
