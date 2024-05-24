<?php

namespace Centrobill\Sdk\ValueObject\Sku;

use Centrobill\Sdk\Exception\NameException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Name
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;
    public const MAX_LENGTH = 36;

    protected protected function checkValue($value)
    {
        if (empty($value)) {
            throw NameException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw NameException::invalidLength();
        }
    }
}
