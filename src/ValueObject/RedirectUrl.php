<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\RedirectUrlException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class RedirectUrl
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw RedirectUrlException::emptyValue();
        }
    }
}
