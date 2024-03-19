<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PaymentAccountIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class PaymentAccountId
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw PaymentAccountIdException::emptyValue();
        }
    }
}
