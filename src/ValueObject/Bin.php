<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BinException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Bin
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 100000;
    public const MAX_LENGTH = 99999999;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw BinException::emptyValue();
        }
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw BinException::invalidLength();
        }
    }
}
