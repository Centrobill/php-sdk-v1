<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BankBranchCodeException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class BankBranchCode
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 20;

    protected function checkValue(string $value): void
    {
        if (empty($value)) {
            throw BankBranchCodeException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw BankBranchCodeException::invalidLength();
        }
    }
}
