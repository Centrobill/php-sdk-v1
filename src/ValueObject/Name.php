<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\NameException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Name
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw NameException::emptyValue();
        }
    }
}
