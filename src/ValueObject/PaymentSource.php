<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PaymentSourceException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class PaymentSource
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw PaymentSourceException::emptyValue();
        }
    }
}
