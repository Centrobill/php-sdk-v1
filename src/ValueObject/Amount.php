<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AmountException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Amount
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value): void
    {
        if (empty($value)) {
            throw AmountException::emptyValue();
        }
    }
}
