<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ExpirationMonthException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class ExpirationMonth
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 2;
    public const MAX_LENGTH = 2;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw ExpirationMonthException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ExpirationMonthException::invalidLength();
        }
    }
}
