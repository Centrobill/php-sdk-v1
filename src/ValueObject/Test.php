<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TestException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Test
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw TestException::emptyValue();
        }
    }
}
