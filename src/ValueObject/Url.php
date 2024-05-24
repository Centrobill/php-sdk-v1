<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\UrlException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Url
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw UrlException::emptyValue();
        }

        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            throw UrlException::invalidValue();
        }
    }
}
