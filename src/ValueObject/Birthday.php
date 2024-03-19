<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BirthdayException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Birthday
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw BirthdayException::emptyValue();
        }
    }
}
