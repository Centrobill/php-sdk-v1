<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\UserAgentException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class UserAgent
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 255;

    /**
     * @throws UserAgentException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw UserAgentException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw UserAgentException::invalidLength();
        }
    }
}
