<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ConsumerIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class ConsumerId
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;

    public const MAX_LENGTH = 36;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw ConsumerIdException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ConsumerIdException::invalidLength();
        }
    }
}
