<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AllowedIpsException;
use Centrobill\Sdk\ValueObject\Traitss\ValueToStringTrait;

final class AllowedIps
{
    use ValueToStringTrait;

    function checkValue($value)
    {
        if (empty($value)) {
            throw AllowedIpsException::emptyValue();
        }
    }
}
