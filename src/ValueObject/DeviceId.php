<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\DeviceIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class DeviceId
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 1024;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw DeviceIdException::emptyValue();
        }
        if (strlen($value) > self::MAX_LENGTH) {
            throw DeviceIdException::invalidLength();
        }
    }
}
