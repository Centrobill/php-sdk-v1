<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\RequestIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class RequestId
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw RequestIdException::emptyValue();
        }
    }
}
