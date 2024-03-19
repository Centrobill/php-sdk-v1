<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\EmailException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Email
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw EmailException::emptyValue();
        }
    }
}
