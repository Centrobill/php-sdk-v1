<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject\Fees;

use Centrobill\Sdk\Exception\FeesTypeException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Type
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value): void
    {
        if (empty($value)) {
            throw FeesTypeException::emptyValue();
        }
    }
}
