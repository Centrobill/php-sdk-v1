<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TitleException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Title
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 3;
    public const MAX_LENGTH = 128;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw TitleException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw TitleException::invalidLength();
        }
    }
}
