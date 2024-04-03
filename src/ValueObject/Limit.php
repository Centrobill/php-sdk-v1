<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\LimitException;

final class Limit
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
        if (filter_var($value, FILTER_VALIDATE_INT) === false || (int)$value < 0) {
            throw LimitException::invalidValue();
        }

        $this->value = (int)$value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
