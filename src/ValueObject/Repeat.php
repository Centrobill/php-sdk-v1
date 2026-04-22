<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\RepeatException;

final class Repeat
{
    /** @var mixed $value  */
    private $value;

    /**
     * @param bool|int|string $value
     *
     * @throws RepeatException
     */
    public function __construct($value)
    {
        if (!(is_bool($value)
            || is_int($value)
            || (is_string($value) && filter_var($value, FILTER_VALIDATE_INT) !== false))
        ) {
            throw RepeatException::invalidType();
        }

        if (is_string($value) && filter_var($value, FILTER_VALIDATE_INT) === false) {
            throw RepeatException::invalidType();
        }

        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
