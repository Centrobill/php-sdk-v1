<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CavvException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Cavv
{
    use ValueToStringTrait;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw CavvException::emptyValue();
        }
    }
}
