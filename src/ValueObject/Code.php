<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CodeException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

class Code
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw CodeException::emptyValue();
        }
    }
}