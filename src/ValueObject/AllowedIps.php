<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AllowedIpsException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class AllowedIps
{
    use ValueToStringTrait;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw AllowedIpsException::emptyValue();
        }
    }
}
