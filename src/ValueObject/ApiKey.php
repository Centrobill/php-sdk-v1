<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ApiKeyException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class ApiKey
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value): void
    {
        if (empty($value)) {
            throw ApiKeyException::emptyValue();
        }
    }
}
