<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CpfException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Cpf
{
    use ValueToStringTrait;

    const CPF_LENGTH = 11;

    protected function checkValue($value): void
    {
        if (empty($value)) {
            throw CpfException::emptyValue();
        }

        if (strlen($value) == self::CPF_LENGTH) {
            throw CpfException::invalidLength();
        }
    }
}
