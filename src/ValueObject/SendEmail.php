<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\SendEmailException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class SendEmail
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw SendEmailException::emptyValue();
        }
    }
}
