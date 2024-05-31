<?php

namespace Centrobill\Sdk\ValueObject\Sku;

use Centrobill\Sdk\Exception\TitleException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Title
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 64;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw TitleException::emptyValue();
        }
        
        if (strlen($value) > self::MAX_LENGTH) {
            throw TitleException::invalidLength();
        }
    }
}
