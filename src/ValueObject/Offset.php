<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\OffsetException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Offset
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 13;

    /**
     * @throws OffsetException
     */
    protected function checkValue($value)
    {
        if (strlen($value) > self::MAX_LENGTH) {
            throw OffsetException::invalidLength();
        }

        if (!preg_match('/^\d+d$/', $value)) {
            throw OffsetException::invalidValue();
        }

        if ((int)str_replace('d', '', $value) < 0) {
            throw OffsetException::positiveInteger();
        }
    }
}
