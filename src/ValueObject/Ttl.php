<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TtlException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Ttl
{
    use ValueToStringTrait;

    function checkValue($value)
    {
        if (empty($value)) {
            throw TtlException::emptyValue();
        }
    }
}
