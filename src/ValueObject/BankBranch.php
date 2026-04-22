<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BankBranchException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class BankBranch
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 100;

    protected function checkValue(string $value): void
    {
        if (empty($value)) {
            throw BankBranchException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw BankBranchException::invalidLength();
        }

        if (strpos($value, ' ') !== false) {
            throw BankBranchException::invalidFormat();
        }
    }
}
