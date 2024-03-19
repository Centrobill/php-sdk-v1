<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AddressException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Address
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 64;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value): void
    {
        if (empty($value)) {
            throw AddressException::emptyValue();
        }
        if (strlen($value) > self::MAX_LENGTH) {
            throw AddressException::invalidLength();
        }
    }
}
