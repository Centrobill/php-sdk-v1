<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TtlException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Ttl
{
    use ValueToStringTrait;

    /**
     * @throws TtlException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw TtlException::emptyValue();
        }
    }
}
