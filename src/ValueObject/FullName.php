<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\FullNameException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class FullName
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;
    public const MAX_LENGTH = 64;

    /**
     * @throws FullNameException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw FullNameException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw FullNameException::invalidLength();
        }
    }
}
