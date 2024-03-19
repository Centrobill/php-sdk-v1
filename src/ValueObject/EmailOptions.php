<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\EmailOptionsException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class EmailOptions
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw EmailOptionsException::emptyValue();
        }
    }
}
