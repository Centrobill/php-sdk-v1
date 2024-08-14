<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BinException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Bin
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 6;

    public const MAX_LENGTH = 8;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw BinException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw BinException::invalidLength();
        }
    }
}
