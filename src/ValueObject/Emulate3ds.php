<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\Emulate3dsException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Emulate3ds
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw Emulate3dsException::emptyValue();
        }
    }
}
