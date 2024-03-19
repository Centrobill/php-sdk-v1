<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PhoneException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Phone
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 7;
    public const MAX_LENGTH = 18;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw PhoneException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw PhoneException::invalidLength();
        }
    }
}
