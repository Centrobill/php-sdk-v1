<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\SkuException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Sku
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw SkuException::emptyValue();
        }
    }
}
