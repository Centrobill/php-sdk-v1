<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ValueException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Value
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;
    
    public const MAX_LENGTH = 36;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw ValueException::emptyValue();
        }
        
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ValueException::invalidLength();
        }
    }
}
