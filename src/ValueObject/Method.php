<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\MethodException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Method
{
    use ValueToStringTrait;

    function checkValue($value)
    {
        if (empty($value)) {
            throw MethodException::emptyValue();
        }
    }
}
