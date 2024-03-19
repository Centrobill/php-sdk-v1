<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\IbanException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Iban
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;
    public const MAX_LENGTH = 34;

    function checkValue($value)
    {
        if (empty($value)) {
            throw IbanException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw IbanException::invalidLength();
        }
    }
}
