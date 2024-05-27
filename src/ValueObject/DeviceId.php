<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\DeviceIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class DeviceId
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 1024;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw DeviceIdException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw DeviceIdException::invalidLength();
        }
    }
}
