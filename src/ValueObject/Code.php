<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CodeException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

class Code
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw CodeException::emptyValue();
        }
    }
}
