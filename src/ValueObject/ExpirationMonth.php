<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ExpirationMonthException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class ExpirationMonth
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 2;

    public const MAX_LENGTH = 2;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw ExpirationMonthException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ExpirationMonthException::invalidLength();
        }

        if ($value == '00' || !preg_match('/^(0[1-9]|1[0-2])$/', $value)) {
            throw ExpirationMonthException::invalidValue();
        }
    }
}
