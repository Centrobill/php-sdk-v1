<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\OffsetException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Offset
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 5;

    /**
     * @throws OffsetException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw OffsetException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw OffsetException::invalidLength();
        }

        if (!preg_match('/^\d+d$/', $value)) {
            throw OffsetException::invalidValue();
        }
    }
}
