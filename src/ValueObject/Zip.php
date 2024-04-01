<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\Exception\ZipException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Zip
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;

    public const MAX_LENGTH = 16;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value): void
    {
        if (empty($value)) {
            throw ZipException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ZipException::invalidLength();
        }
    }
}
