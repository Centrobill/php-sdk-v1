<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\IpnUrlException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class IpnUrl
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw IpnUrlException::emptyValue();
        }
    }
}
