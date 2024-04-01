<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ReasonException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Reason
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 255;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw ReasonException::emptyValue();
        }
        if (strlen($value) > self::MAX_LENGTH) {
            throw ReasonException::invalidLength();
        }
    }
}
