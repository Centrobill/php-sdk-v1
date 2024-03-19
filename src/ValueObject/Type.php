<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TypeException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Type
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;
    public const MAX_LENGTH = 36;

    function checkValue($value)
    {
        if (empty($value)) {
            throw TypeException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw TypeException::invalidLength();
        }
    }
}
