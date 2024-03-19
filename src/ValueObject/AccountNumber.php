<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AccountNumberException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class AccountNumber
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 32;

    function checkValue($value)
    {
        if (empty($value)) {
            throw AccountNumberException::emptyValue();
        }
        if (strlen($value) > self::MAX_LENGTH) {
            throw AccountNumberException::invalidLength();
        }
    }
}
