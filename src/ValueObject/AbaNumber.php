<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AbaNumberException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class AbaNumber
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 32;

    /**
     * @throws AbaNumberException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw AbaNumberException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw AbaNumberException::invalidLength();
        }
    }
}
