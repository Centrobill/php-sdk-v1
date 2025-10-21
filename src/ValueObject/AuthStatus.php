<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AuthStatusException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class AuthStatus
{
    use ValueToStringTrait;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw AuthStatusException::emptyValue();
        }
    }
}
