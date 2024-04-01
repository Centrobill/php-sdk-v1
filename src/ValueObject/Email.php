<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\EmailException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

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

        if (filter_var($value, FILTER_VALIDATE_EMAIL) === false) {
            throw EmailException::invalidValue();
        }
    }
}
