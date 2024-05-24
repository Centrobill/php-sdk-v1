<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BicException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Bic
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 8;

    public const MAX_LENGTH = 11;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw BicException::emptyValue();
        }
        
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw BicException::invalidLength();
        }
    }
}
