<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ParametersException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Parameters
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw ParametersException::emptyValue();
        }
    }
}
