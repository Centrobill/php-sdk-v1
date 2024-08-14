<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ActionTypeException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class ActionType
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;
    public const MAX_LENGTH = 36;

    /**
     * @throws ActionTypeException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw ActionTypeException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ActionTypeException::invalidLength();
        }
    }
}
