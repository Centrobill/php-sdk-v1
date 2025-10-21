<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BankCodeException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class BankCode
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 20;

    protected function checkValue(string $value): void
    {
        if (empty($value)) {
            throw BankCodeException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw BankCodeException::invalidLength();
        }
    }
}
