<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\IdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Id
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;
    public const MAX_LENGTH = 36;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw IdException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw IdException::invalidLength();
        }
    }
}
