<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject\Fees;

use Centrobill\Sdk\Exception\FeeValueException;

final class Value
{
    private float $value;

    /**
     * @param mixed $value
     * @throws FeeValueException
     */
    public function __construct($value)
    {
        if (filter_var($value, FILTER_VALIDATE_FLOAT) === false || (float)$value < 0) {
            throw FeeValueException::invalidValue();
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
