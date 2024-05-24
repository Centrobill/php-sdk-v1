<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\FirstNameException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class FirstName
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;
    public const MAX_LENGTH = 32;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw FirstNameException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw FirstNameException::invalidLength();
        }
    }
}
