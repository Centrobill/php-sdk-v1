<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CvvException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Cvv
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 3;

    public const MAX_LENGTH = 4;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value): void
    {
        if (empty($value)) {
            throw CvvException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw CvvException::invalidLength();
        }
    }
}
