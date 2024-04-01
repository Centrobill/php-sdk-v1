<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BalanceException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Balance
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;
    public const MAX_LENGTH = 4;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value): void
    {
        if (empty($value)) {
            throw BalanceException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw BalanceException::invalidLength();
        }
    }
}
