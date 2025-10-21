<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BankNameException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class BankName
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 100;

    protected function checkValue(string $value): void
    {
        if (empty($value)) {
            throw BankNameException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw BankNameException::invalidLength();
        }
    }
}
