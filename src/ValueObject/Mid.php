<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\MidException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Mid
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 2;
    public const MAX_LENGTH = 36;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw MidException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw MidException::invalidLength();
        }
    }
}
