<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\LayoutException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Layout
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw LayoutException::emptyValue();
        }
    }
}
