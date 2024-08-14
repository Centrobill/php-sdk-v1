<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TokenException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Token
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 512;

    /**
     * @throws TokenException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw TokenException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw TokenException::invalidLength();
        }
    }
}
