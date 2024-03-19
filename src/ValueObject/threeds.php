<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\threedsException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class threeds
{
    use ValueToStringTrait;

    function checkValue($value)
    {
        if (empty($value)) {
            throw threedsException::emptyValue();
        }
    }
}
