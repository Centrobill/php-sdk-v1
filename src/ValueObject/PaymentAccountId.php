<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PaymentAccountIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class PaymentAccountId
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw PaymentAccountIdException::emptyValue();
        }

        if (!preg_match('/^[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}$/i', $value)) {
            throw PaymentAccountIdException::invalidFormat();
        }
    }
}
