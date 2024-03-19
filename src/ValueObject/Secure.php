<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\SecureException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Secure
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw SecureException::emptyValue();
        }
    }
}
