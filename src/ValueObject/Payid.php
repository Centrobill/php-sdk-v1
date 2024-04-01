<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PayidException;
use Centrobill\Sdk\ValueObject\Traitss\ValueToStringTrait;

final class Payid
{
    use ValueToStringTrait;

    function checkValue($value)
    {
        if (empty($value)) {
            throw PayidException::emptyValue();
        }
    }
}
