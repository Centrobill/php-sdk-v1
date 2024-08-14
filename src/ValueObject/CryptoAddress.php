<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CryptoAddressException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class CryptoAddress
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw CryptoAddressException::emptyValue();
        }
    }
}
