<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CurrencyException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Currency
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw CurrencyException::emptyValue();
        }
    }
}
