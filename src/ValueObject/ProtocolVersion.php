<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ProtocolVersionException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class ProtocolVersion
{
    use ValueToStringTrait;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw ProtocolVersionException::emptyValue();
        }
    }
}
