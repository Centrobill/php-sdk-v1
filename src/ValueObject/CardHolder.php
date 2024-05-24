<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CardHolderException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class CardHolder
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;

    public const MAX_LENGTH = 64;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value): void
    {
        if (empty($value)) {
            throw CardHolderException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw CardHolderException::invalidLength();
        }
    }
}
