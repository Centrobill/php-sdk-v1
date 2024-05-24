<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\NumberException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Number
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 12;
    public const MAX_LENGTH = 19;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value): void
    {
        if (empty($value)) {
            throw NumberException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw NumberException::invalidLength();
        }
    }
}
