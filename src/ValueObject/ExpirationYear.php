<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ExpirationYearException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class ExpirationYear
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
            throw ExpirationYearException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ExpirationYearException::invalidLength();
        }

        if ($value <= date('y')) {
            throw ExpirationYearException::invalidValue();
        }
    }
}
