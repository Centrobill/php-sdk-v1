<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\FromException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class From
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 3;
    public const MAX_LENGTH = 16;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw FromException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw FromException::invalidLength();
        }
    }
}
