<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\EciException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Eci
{
    use ValueToStringTrait;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw EciException::emptyValue();
        }
    }
}
