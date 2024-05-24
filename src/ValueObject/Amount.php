<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AmountException;

final class Amount
{
    /**
     * @var float
     */
    private $value;

    /**
     * Amount constructor.
     *
     * @param mixed $value
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
    public function getValue()
    {
        return $this->value;
    }
}
