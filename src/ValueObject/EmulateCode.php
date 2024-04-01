<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\EmulateCodeException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class EmulateCode
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 4;

    public const MAX_LENGTH = 6;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw EmulateCodeException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw EmulateCodeException::invalidLength();
        }
    }
}
