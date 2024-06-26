<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CityException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class City
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;

    public const MAX_LENGTH = 50;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw CityException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw CityException::invalidLength();
        }
    }
}
