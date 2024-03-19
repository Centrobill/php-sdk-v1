<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CountryException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Country
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw CountryException::emptyValue();
        }
    }
}
