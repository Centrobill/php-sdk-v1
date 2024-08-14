<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\RequestException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Request
{
    use ValueToStringTrait;

    /**
     * @throws RequestException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw RequestException::emptyValue();
        }
    }
}
