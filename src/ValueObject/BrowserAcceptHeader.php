<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BrowserAcceptHeaderException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class BrowserAcceptHeader
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw BrowserAcceptHeaderException::emptyValue();
        }
    }
}
