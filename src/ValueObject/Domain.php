<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\DomainException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Domain
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value): void
    {
        if (empty($value)) {
            throw DomainException::emptyValue();
        }

        if (filter_var($value, FILTER_VALIDATE_URL) === false) {
            throw DomainException::invalidValue();
        }
    }

}
