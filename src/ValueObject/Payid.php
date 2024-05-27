<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PayidException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Payid
{
    use ValueToStringTrait;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw PayidException::emptyValue();
        }
    }
}
