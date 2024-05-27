<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\LayoutException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Layout
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw LayoutException::emptyValue();
        }
    }
}
