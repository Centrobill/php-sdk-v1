<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\UsernameException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Username
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;

    public const MAX_LENGTH = 255;

    /**
     * @throws UsernameException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw UsernameException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw UsernameException::invalidLength();
        }
    }
}
