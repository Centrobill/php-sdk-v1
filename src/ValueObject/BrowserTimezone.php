<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BrowserTimezoneException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class BrowserTimezone
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw BrowserTimezoneException::emptyValue();
        }
    }
}
